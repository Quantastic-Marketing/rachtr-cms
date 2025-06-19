<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CommonComponents;
use Filament\Resources\Resource;
use RalphJSmit\Filament\SEO\SEO;
use App\Models\Pages as PageModel;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use App\Filament\Components\CustomSEO;
use Filament\Forms\Components\Section;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;

class PageResource extends Resource
{
    protected static ?string $model = PageModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        $products = Product::pluck('name', 'id')->toArray();
        return $form
                ->schema([
                    Tabs::make('Page Tabs')
                        ->tabs([
                            Tab::make('Page')
                                ->schema([
                                    Section::make('Page')
                                        ->description('Basic page details and structure.')
                                        ->schema([
                                            TextInput::make('title')->label('Page name')->required(),
                                            
                                            Checkbox::make('is_homepage')
                                                ->label('Set as Homepage')
                                                ->default(false)
                                                ->reactive()
                                                ->helperText('Only one post can be the homepage at a time.'),
                                            TextInput::make('slug')
                                                ->label('Slug')
                                                ->placeholder('Enter the slug')
                                                ->visible(fn (callable $get) => !$get('is_homepage')),
                                            Select::make('status')
                                                ->options([
                                                    'draft' => 'Draft',
                                                    'archived' => 'Archived',
                                                    'published' => 'Published',
                                                ])
                                                ->required(),
                                            Checkbox::make('content.is_product_list')
                                                ->label('Is it a product list page?')
                                                ->reactive()
                                                ->afterStateHydrated(fn ($set, $record) => 
                                                    $set('content.is_product_list', isset($record->content['is_product_list']) ? (bool) $record->content['is_product_list'] : false)
                                                ),
                                        ]),
                                ])
                                ,

                            Tab::make('SEO Details')
                                ->schema([
                                    Section::make('SEO Details')
                                        ->description('Seo details for page')
                                        ->schema([
                                            SEO::make(['title', 'description', 'robots', 'canonical_url', 'meta'])
                                                ->schema([
                                                    TextInput::make('title')->label('SEO Title'),
                                                    TextInput::make('description')->label('SEO Description'),
                                                    Select::make('robots')
                                                        ->label('Robots')
                                                        ->options([
                                                            'index, follow' => 'Index, Follow',
                                                            'noindex, follow' => 'NoIndex, Follow',
                                                            'index, nofollow' => 'Index, NoFollow',
                                                            'noindex, nofollow' => 'NoIndex, NoFollow',
                                                        ])
                                                        ->searchable(),
                                                    TextInput::make('canonical_url')
                                                        ->label('Canonical URL')
                                                        ->url()
                                                        ->nullable()
                                                ]),

                                            TagsInput::make('seo.meta.focus_keywords')
                                                ->label('Focus Keywords')
                                                ->placeholder('Enter keywords separated by commas...')
                                                ->helperText('Add focus keywords for SEO analysis.')
                                                ->afterStateHydrated(function ($component, $record) {
                                                    if ($record && $record->seo) {
                                                        $meta = json_decode($record->seo->meta, true) ?? [];
                                                        $component->state($meta['focus_keywords'] ?? []);
                                                    }
                                                }),

                                            Repeater::make('schema_data')
                                                ->label('Json Schemas')
                                                ->schema([
                                                    Textarea::make('schema')
                                                        ->label('JSON Schema')
                                                        ->rows(10)
                                                        ->rules(['nullable', 'json'])
                                                        ->placeholder('Enter JSON here...')
                                                ])
                                                ->addActionLabel('Adds Json Schema'),
                                        ]),
                                ]),

                            Tab::make('Template & Page Content')
                                ->schema([
                                    Section::make('Page Template Details')
                                        ->description('Page details')
                                        ->schema([
                                            Select::make('parent_id')
                                                ->relationship('parent', 'title')
                                                ->nullable()
                                                ->label('Parent Slug'),
                                            Select::make('header_id')
                                                ->label('Header Template')
                                                ->options(function () {
                                                    try {
                                                        return CommonComponents::where('type', 'header')->pluck('type', 'id')->toArray() ?: [];
                                                    } catch (\Exception $e) {
                                                        return [];
                                                    }
                                                })
                                                ->placeholder('Select Template')
                                                ->required(),
                                            Select::make('footer_id')
                                                ->label('Footer Template')
                                                ->options(function () {
                                                    try {
                                                        return CommonComponents::where('type', 'footer')->pluck('type', 'id')->toArray() ?: [];
                                                    } catch (\Exception $e) {
                                                        return [];
                                                    }
                                                })
                                                ->placeholder('Select Template')
                                                ->required(),
                                        ]),

                                    Section::make('Add Page Content')
                                        ->description('Add section, images, and products')
                                        ->schema([
                                            FileUpload::make('content.banner_image')
                                                ->image()
                                                ->disk('public')
                                                ->directory('images')
                                                ->label('Banner Image')
                                                ->required(),
                                            TextInput::make('content.page_heading')->label('Page Heading')->required(),
                                            RichEditor::make('content.body')->label('The Body text')->required(),
                                            Checkbox::make('has_faq')
                                                ->label('Does It have FAQ Section')
                                                ->reactive()
                                                ->afterStateHydrated(fn ($set, $record) => 
                                                    $set('has_faq', isset($record->content['faq_section']) && count($record->content['faq_section']) > 0)
                                                ),
                                            Repeater::make('content.faq_section')
                                                ->label('Faq Section')
                                                ->schema([
                                                    Grid::make(2)->schema([
                                                    RichEditor::make('acc_title')->label('Title for FAQ')->required(),
                                                    RichEditor::make('acc_body')->label('Dropdown description for FAQ')->required()]),
                                                ])
                                                ->addActionLabel('Adds FAQ Accordion')
                                                ->hidden(fn (callable $get) => !$get('has_faq')),

                                            Repeater::make('content.sections')
                                                ->label('Page Sections')
                                                ->schema([
                                                    TextInput::make('section_heading')->label('Section Heading'),
                                                    Select::make('bg_color')
                                                        ->label('Background Color for the Section')
                                                        ->options([
                                                            '#eeeeee' => 'Light Gray (#EEEEEE)',
                                                            '#ffffff' => 'White (#FFFFFF)',
                                                        ])
                                                        ->default('#ffffff')
                                                        ->required(),
                                                    Select::make('products')
                                                        ->label('Select Products')
                                                        ->options($products)
                                                        ->searchable()
                                                        ->preload()
                                                        ->multiple()
                                                        ->required(),
                                                ]),
                                                RichEditor::make('content.popular_searches')
                                                            ->label('Popular Searches')
                                                                    ->columnSpanFull(),
                                                            
                                        ])
                                        ->hidden(fn (callable $get) => !$get('content.is_product_list')),
                                ]),

                            Tab::make('Blogs')
                                ->schema([
                                    Section::make('Add Blogs for Page')
                                        ->description('Select blogs for the page')
                                        ->schema([
                                            TextInput::make('content.blog-heading')
                                                        ->label('Add a section heading for blog'),
                                            TextArea::make('content.blog-sub-heading')
                                                        ->label('Add a section sub heading for blog'),
                                            Select::make('content.blogs')
                                                ->label('Select Blogs')
                                                ->options(Post::pluck('title', 'id'))
                                                ->searchable()
                                                ->multiple()
                                                ->maxItems(6)
                                                ->preload()
                                                ->helperText('Select up to 3 blog posts.'),
                                        ]),
                                ]),

                            Tab::make('Additional Content')
                                ->schema(fn (Get $get) => self::getSchemaBySlug($get('slug') ?? 'default')),
                        ])
                        ->columnSpanFull(),
                ]);

                    
                                
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Title')
                ->searchable()
                ->sortable(),

            TextColumn::make('slug')
                ->label('Slug')
                ->searchable()
                ->sortable()
                ->toggleable(),

            TextColumn::make('header_id')
                ->label('Header Template')
                ->sortable()
                ->toggleable()
                ->formatStateUsing(fn ($state) => 
                    CommonComponents::find($state)?->type ?? 'N/A'
                ),

            TextColumn::make('footer_id')
                ->label('Footer Template')
                ->sortable()
                ->toggleable()
                ->formatStateUsing(fn ($state) => 
                    CommonComponents::find($state)?->type ?? 'N/A'
                ),

            TextColumn::make('status')
                ->label('Status')
                ->sortable()
                ->badge()
                ->color(fn ($state) => match ($state) {
                    'draft' => 'gray',
                    'archived' => 'red',
                    'published' => 'green',
                    default => 'gray',
                }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    protected static function getCachedHeaderOptions()
    {
        try {
            $headers = CommonComponents::where('type', 'header')->pluck('type', 'id')->toArray();
            return $headers ?: [];
        } catch (\Exception $e) {
            return [];
        }
    }

    protected static function getCachedFooterOptions()
    {
        try {
            $footers = CommonComponents::where('type', 'footer')->pluck('type', 'id')->toArray();
            return $footers ?: [];
        } catch (\Exception $e) {
            return [];
        }
    }

    public static function getSchemaBySlug(string $slug): array
    {
        return match ($slug) {
            '/' => self::defaultTemplate(),
            'residential-commercial-building' => self::industrialTemplate(),
            'industrial-flooring-solutions' => self::industrialTemplate(),
            'stone-processing-industry' => self::industrialTemplate(),
            'epoxy-flooring-services' => self::epoxyTemplate(),
            'epoxy-flooring-cost-price' =>self::epoxyTemplate(),
            'pu-flooring' =>self::puFlooringTemplate(),
            'contractor-center' => self::contractorTemplate(),
            'about-us' => self::aboutTemplate(),
            'careers' => self::careerTemplate(),
            'architect-center' => self::architectTemplate(),
            default => self::defaultTemplate(),
        };
    }

    public static function defaultTemplate(): array
    {
        return [
            Section::make('No Template Found')
                ->description('This page has no specific input fields. Please select a valid slug or configure a template.')
                ->schema([]),
        ];
    }

    public static function industrialTemplate(): array
    {   
        $products = Product::pluck('name', 'id')->toArray();
        return [
                Section::make('Banner Section')
                    ->description('Banner content for the hero section')
                    ->schema([
                        FileUpload::make('content.banner.banner_image')
                            ->label('Banner Image')
                            ->directory('images')
                            ->disk('public')
                            ->image(),
                        TextInput::make('content.banner.banner_alt')
                            ->label('Banner Image Alt'),
                        TextInput::make('content.banner.banner_title')
                            ->label('Banner Title - White Text Line 1'),

                        Textarea::make('content.banner.banner_description')
                            ->label('Banner Description')
                            ->rows(3),
                        ]),

                        Section::make('Section About : ')
                            ->description('Content for the About section.')
                            ->schema([
                                TextInput::make('content.about.heading')
                                    ->label('Main Heading')
                                    ->placeholder('Welcome to RachTR Residential & Commercial Buildings Solutions'),
                                TextInput::make('content.about.highlight_text')
                                    ->label('Highlighted Span Text')
                                    ->placeholder('RachTR'),
                
                                Repeater::make('content.about.paragraphs')
                                    ->label('About descrption')
                                    ->schema([
                                        Textarea::make('text')
                                            ->label('Paragraph Text')
                                            ->rows(3),
                                    ])
                                    ->defaultItems(2)
                                    ->addActionLabel('Add Paragraph'),
                
                                FileUpload::make('content.about.image')
                                    ->label('Image (Common for Desktop & Mobile)')
                                    ->disk('public')
                                    ->directory('images')
                                    ->image(),
                                
                                TextInput::make('content.about.img_alt')
                                    ->label('Banner Image Alt'),
                        
                             ]),
                        

                Section::make('Industrial Type Slider')
                        ->description('A slider section showing multiple solution types.')
                        ->schema([
                            FileUpload::make('content.type_slider.img')
                                ->label('Section background Image')
                                ->directory('images')
                                ->disk('public')
                                ->image(),
                            TextInput::make('content.type_slider.title')
                                ->label('Main Heading')
                                ->default('Residential & Commercial Buildings Solutions'),
                            TextInput::make('content.type_slider.sub_title')
                                ->label('Sub Heading')
                                ->default('Where Quality Matters'),
                            Repeater::make('content.type_slider.slides')
                                ->label('Slides')
                                ->schema([
                                    TextInput::make('left_tab')
                                        ->label('Left Tab Text'),
                                    FileUpload::make('image')
                                        ->label('Slide Image')
                                        ->image()
                                        ->disk('public')
                                        ->directory('images'),
                                    TextInput::make('img_alt')
                                        ->label('Image Alt'),
                                    TextInput::make('heading')
                                        ->label('Slide Heading'),
        
                                    Textarea::make('intro_paragraph')
                                        ->label('Intro Paragraph')
                                        ->rows(2),
        
                                    Repeater::make('features')
                                        ->label('Feature Points')
                                        ->schema([
                                            TextInput::make('text')->label('Point'),
                                        ])
                                        ->maxItems(6),
        
                                    Textarea::make('bottom_paragraph')
                                        ->label('Bottom Paragraph')
                                        ->rows(2),
        
                                    TextInput::make('right_tab')
                                        ->label('Right Tab Text'),
                                ]),
                        ]),
                Section::make('Products We Offer')
                        ->description('Manage product categories and items under the "Products We Offer" section.')
                        ->schema([
                            Repeater::make('content.systems')
                                ->label('Systems Type Name')
                                ->schema([
                                    TextInput::make('category_title')->label('Category Title'),
                                    Textarea::make('description')->label('Description')->rows(3)->nullable(),
                                    Repeater::make('product_category')
                                            ->label('Product Category Type Block add')
                                            ->schema([
                                                TextInput::make('category_subtitle')->label('Category Subtitle')->nullable(),
                                                Textarea::make('description')->label('Description')->rows(3)->nullable(),
                                                Select::make('products')
                                                        ->label('Select Products For current product category type')
                                                        ->options($products)
                                                        ->searchable()
                                                        ->preload()
                                                        ->multiple(),
                                            ]),
                                    Select::make('products')
                                            ->label('Select Products For current Systems block')
                                            ->options($products)
                                            ->searchable()
                                            ->preload()
                                            ->multiple(),
                                        ])
                                        ->columns(3),
                                ]),
                Section::make('Why trust  industrial  Section')
                        ->description('Why trust industrial section.')
                        ->schema([
                            Grid::make(2)->schema([
                                FileUpload::make('content.why_trust.video_mp4')
                                    ->directory('videos')
                                    ->acceptedFileTypes(['video/mp4'])
                                    ->label('MP4 Video')
                                    ->preserveFilenames(),
                        
                                FileUpload::make('content.why_trust.video_webm')
                                    ->directory('videos')
                                    ->acceptedFileTypes(['video/webm'])
                                    ->label('WEBM Video')
                                    ->preserveFilenames()
                                    ]),
                            FileUpload::make('content.why_trust.bg_image')
                                    ->disk('public')
                                    ->directory('images')
                                    ->image()
                                    ->preserveFilenames(),
                            TextInput::make('content.why_trust.img_alt')
                                    ->label('Image Alt'),
                            RichEditor::make('content.why_trust.heading')
                                    ->label('Section Heading')
                                    ->toolbarButtons(['bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link', 'undo', 'redo'])
                                    ->hint('Use <br> and <span class="color-orange">RachTR</span> where needed.')
                                    ->dehydrateStateUsing(fn ($state) => preg_replace('/<\/?p[^>]*>/', '', $state)),
                            
                            Repeater::make('content.why_trust.features')
                                    ->label('Feature Blocks')
                                    ->maxItems(4)
                                    ->schema([
                                        FileUpload::make('image')
                                            ->disk('public')
                                            ->directory('images')
                                            ->image()
                                            ->preserveFilenames(),
                                        TextInput::make('img_alt')
                                            ->label('Image Alt'),
                                        TextInput::make('title')
                                            ->label('Feature Title (use <br>)'),
                                        Textarea::make('description')
                                            ->label('Feature Description'),
                                    ])
                                    ->defaultItems(4)
                                    ->columns(1),
                            
                        ]),
                Section::make('Case Studies section: ')
                        ->description('Add the details or case studies slider/block')
                        ->schema([
                            RichEditor::make('content.case_study.heading')
                                    ->label('Section Heading')
                                    ->toolbarButtons(['bold', 'italic', 'underline', 'bulletList', 'orderedList', 'link', 'undo', 'redo'])
                                    ->hint('Use <br> and <span class="color-orange">RachTR</span> where needed.')
                                    ->dehydrateStateUsing(fn ($state) => preg_replace('/<\/?p[^>]*>/', '', $state)),
                            Repeater::make('content.case_study.slides')
                                        ->label('Case Studies')
                                        ->schema([
                                            TextInput::make('right_title')
                                                ->label('Right block Title'),

                                            Textarea::make('subtitle')
                                                ->label('Right Block Sub Title')
                                                ->rows(2),
                                            TextInput::make('left_title')
                                                ->label('Left block Title'),
                                            Repeater::make('paragraphs')
                                                ->label('Case study left block descrption')
                                                ->schema([
                                                    Textarea::make('text')
                                                        ->label('Paragraph Text')
                                                        ->rows(3),
                                                ])
                                                ->defaultItems(2)
                                                ->addActionLabel('Add Paragraph'),

                                            TextInput::make('link')
                                                ->label('Add read more/ view more Link')
                                                ->url()
                                                ->default('/blogs'),

                                            FileUpload::make('image_mobile')
                                                ->label('Mobile Image')
                                                ->disk('public')
                                                ->directory('images')
                                                ->image()
                                                ->imageEditor(),
                                            TextInput::make('img_alt')
                                                ->label('Image alt attribute'),

                                            FileUpload::make('image_desktop')
                                                ->label('Desktop Image')
                                                ->disk('public')
                                                ->directory('images')
                                                ->image()
                                                ->imageEditor(),
                                        ])
                                        ->columns(2)
                                        ->addActionLabel('Add Case Study')
                                        ->orderable()
                                        ->collapsed()
                                        ->cloneable()
                                        ->default([])
                        ]),
                Section::make('Our Clients Section')
                        ->description('Banner content for the hero section')
                        ->schema([
                            TextInput::make('content.client.title')
                                ->label('Section Title'),
                            Repeater::make('content.client.companies')
                                ->label('Clients Images Blocks')
                                ->schema([
                                    FileUpload::make('image')
                                        ->label('Client Image')
                                        ->directory('images')
                                        ->disk('public')
                                        ->image(),
                                    TextInput::make('img_alt')
                                        ->label('Client Image Alt'),
                            ]),
                        ]),
                
                Section::make('FAQ Section')
                        ->description('FAQ section details')
                        ->schema([
                            TextInput::make('content.faq.title')
                                ->label('Section Title for FAQ'),
                            TextArea::make('content.faq.description')
                                ->label('Section Description for FAQ'),
                            Repeater::make('content.faq.images')
                                ->label('FAQ Images Blocks')
                                ->schema([
                                    FileUpload::make('image')
                                        ->label('FAQ Image')
                                        ->directory('images')
                                        ->disk('public')
                                        ->image(),
                                    TextInput::make('img_alt')
                                        ->label('FAQ Image Alt'),
                            ]),
                            
                            Repeater::make('content.faq.questions')
                                ->label('FAQ Blocks')
                                ->schema([
                                    Grid::make(2)->schema([
                                        RichEditor::make('acc_title')->label('Title for FAQ'),
                                        RichEditor::make('acc_body')->label('Dropdown description for FAQ'),
                                    ]),
                                ]),

                        ]),
                RichEditor::make('content.popular_searches')
                                                            ->label('Popular Searches')
                                                                    ->columnSpanFull(),
        ];
    }

    public static function epoxyTemplate(): array
    {
        return [
                Section::make('Banner Section')
                    ->schema([
                        Grid::make(2)->schema([
                            FileUpload::make('content.banner.video_webm')->disk('public')->acceptedFileTypes(['video/webm'])->directory('videos')->label('Webm Banner Video'),
                            FileUpload::make('content.banner.video_mp4')->disk('public')->acceptedFileTypes(['video/mp4'])->directory('videos')->label('Mp4 Banner Video')
                        ]),
                        TextInput::make('content.banner.heading')->label('Banner Heading')->hint('Use <span>RachTR</span> where needed to highlight in orange.'),
                        RichEditor::make('content.banner.subhead')
                                    ->label('description')
                                    ->placeholder('description para.'),
                        TextInput::make('content.banner.get_btn_text')->label('Get a Quote Button Text')
                                    ->placeholder('Get a Quote'),
                        Grid::make(2)->schema([
                            TextInput::make('content.banner.whatsapp_btn')->label('Whatsapp Button Text'),
                            TextInput::make('content.banner.whatsapp_link')->label('Whatsapp Link')
                        ]),
                        RichEditor::make('content.banner.note')->label('Note for the banner'),
                    ]),
                Section::make('Clients Section')
                    ->schema([
                        TextInput::make('content.clients.heading')->label('Section Heading')->hint('to highlight use <span>highlight word</span>'),
                        Repeater::make('content.clients.client')
                            ->schema([
                                Grid::make(2)->schema([
                                    FileUpload::make('client_image')->image()->label('Client Image')->disk('public')->directory('images'),
                                    TextInput::make('client_name')->label('Client Image alt text'),
                                ]),
                            ])
                            ->columns(2)
                            ->label('Client Images'),
                    ]),
                Section::make('Epoxy Flooring Applications Section')
                    ->schema([
                        TextInput::make('content.application.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading')
                            ->hint('to highlight use <span>highlight word</span>'),
                        
                        RichEditor::make('content.application.paragraph')
                                    ->label('Paragraph')
                                    ->placeholder('Intro paragraph about Epoxy Flooring Applications.'),
                        ]),
                 Section::make('Built to Last Section')
                    ->schema([
                        FileUpload::make('content.build.built_image')->image()->label('Built to Last Image')->disk('public')->directory('images'),
                        TextInput::make('content.build.built_title')->label('Built to Last Title'),
                        Textarea::make('content.build.built_description')->label('Built to Last Description'),
                        Repeater::make('content.build.built_benefits')
                            ->schema([
                                TextArea::make('benefit_icon')->label('Benefit Icon'),
                                TextInput::make('benefit_title')->label('Benefit Title'),
                                Textarea::make('benefit_description')->label('Benefit Description'),
                            ])
                            ->columns(2)
                            ->label('Benefits'),
                        RichEditor::make('content.build.built_note')->label('Build to last below para')->columnSpanFull(),
                    ]),
                Section::make('What is Epoxy flooring Section')
                    ->schema([
                        TextInput::make('content.whatepoxy.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading')
                            ->hint('to highlight use <span>highlight word</span>'),
                        
                        RichEditor::make('content.whatepoxy.paragraph')
                                    ->label('Content /description for the section')
                                    ->placeholder('Intro paragraph about Epoxy Flooring Applications.'),
                        Grid::make(2)->schema([
                                    FileUpload::make('content.whatepoxy.image')->image()->label('Section Image')->disk('public')->directory('images'),
                                    TextInput::make('content.whatepoxy.img_alt')->label('Image alt text'),
                                    FileUpload::make('content.whatepoxy.overlay_img_desk')->image()->label('Overlay Desktop Image')->disk('public')->directory('images'),
                                    FileUpload::make('content.whatepoxy.overlay_img_mob')->image()->label('Overlay Mobile Image')->disk('public')->directory('images'),
                                ]),
                        ]),
                Section::make('Epoxy flooring Solutions Section')
                    ->schema([
                        TextInput::make('content.epoxysol.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading')
                            ->hint('to highlight use <span>highlight word</span>'),
                        
                        RichEditor::make('content.epoxysol.paragraph')
                                    ->label('Content /description for the section')
                                    ->placeholder('Intro paragraph about Epoxy Flooring Solutions.'),
                        Repeater::make('content.epoxysol.solutions')
                            ->schema([
                                TextArea::make('icon')->label('Solution Icon'),
                                TextInput::make('title')->label('Solution Title'),
                            ])
                            ->columns(2)
                            ->label('Solution points'),
                        ]),
                Section::make('Epoxy flooring Cost  Section')
                    ->schema([
                        TextInput::make('content.epoxycost.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading')
                            ->hint('to highlight use <span>highlight word</span>'),
                        FileUpload::make('content.epoxycost.bg')
                                        ->label('Background Image')
                                        ->disk('public')
                                        ->directory('images')
                                        ->image()
                                        ->imageEditor(),
                        Card::make([
                            TextInput::make('content.epoxycost.subhead1')
                                ->label('Section Subheading')
                                ->placeholder('Enter the heading'),
                            RichEditor::make('content.epoxycost.paragraph1')
                                        ->label('Content /description for the current subhead')
                                        ->placeholder('Intro paragraph about Epoxy Flooring Solutions.'),
                        ])->label('Subsection 1'),
                        Card::make([
                            TextInput::make('content.epoxycost.subhead2')
                                ->label('Section Subheading 2')
                                ->placeholder('Enter the heading'),
                            TextArea::make('content.epoxycost.paragraph2')
                                        ->label('Content /description for the current subhead')
                                        ->placeholder('Intro paragraph about Epoxy Flooring Solutions.'),
                            Grid::make(2)->schema([
                                FileUpload::make('content.epoxycost.image')
                                            ->label('Mobile Image')
                                            ->disk('public')
                                            ->directory('images')
                                            ->image()
                                            ->imageEditor(),
                                TextInput::make('content.epoxycost.imgalt')
                                        ->label('Image alt text')
                                        ->placeholder('Enter the Text'),
                            ]),
                            Repeater::make('content.epoxycost.solutions')
                                ->schema([
                                    Grid::make(2)->schema([
                                        TextArea::make('icon')->label('Icon'),
                                        TextInput::make('title')->label('Title'),
                                    ])
                                ])
                                ->columns(2)
                                ->label('Solution points'),
                         ])->label('Subsection 2 & Solutions'),
                        ]),
                Section::make('Factors affecting the industrial Section')
                    ->schema([
                        TextInput::make('content.factors.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading')
                            ->hint('to highlight use <span>highlight word</span>'),
                        TextInput::make('content.factors.subhead')
                            ->label('Section SubHeading')
                            ->placeholder('Enter the heading'),
                        RichEditor::make('content.factors.paragraph')
                                    ->label('Content /description for the section')
                                    ->placeholder('Intro paragraph about Epoxy Flooring Applications.'),
                        Repeater::make('content.factors.factor')
                                ->schema([
                                    Grid::make(2)->schema([
                                        TextInput::make('number')->label('factor number')
                                            ->placeholder('#FFFFFF'),
                                        TextInput::make('title')->label('factor title')
                                            ->placeholder('#FFFFFF'),
                                        TextInput::make('subhead')->label('factor subheading')
                                            ->placeholder('RAL 7034'),
                                        Richeditor::make('desc')->label('factor description')
                                            ->placeholder('RAL 7034'),
                                    ])
                                ])
                                ->columns(2)
                                ->label('Factors Block'),
                        Grid::make(2)->schema([
                            FileUpload::make('content.factors.image')
                                    ->label('Epoxy Image')
                                    ->disk('public')
                                    ->directory('images')
                                    ->image()
                                    ->imageEditor(), 
                            TextInput::make('content.factors.image_alt')
                                ->label('Factor Image Alg')
                                ->placeholder('Enter the heading'),  
                            ])
                        ]),
                Section::make('Color shades available Section')
                    ->schema([
                        TextInput::make('content.color.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading')
                            ->hint('to highlight use <span>highlight word</span>'),
                        
                        RichEditor::make('content.color.paragraph')
                                    ->label('Content /description for the section')
                                    ->placeholder('Intro paragraph about Epoxy Flooring Applications.'),
                        Repeater::make('content.color.colors')
                                ->schema([
                                    Grid::make(2)->schema([
                                        ColorPicker::make('color')->label('color code')
                                            ->placeholder('#FFFFFF'),
                                        TextInput::make('name')->label('color Nmae')
                                            ->placeholder('RAL 7034'),
                                        FileUpload::make('image')
                                            ->label('Color Image')
                                            ->disk('public')
                                            ->directory('images')
                                            ->image()
                                            ->imageEditor(), 
                                    ])
                                ])
                                ->columns(2)
                                ->label('Colors Block'),
                        ]),
                Section::make('Our Project section: ')
                        ->description('Add the details or projects slider/block')
                        ->schema([
                            TextInput::make('content.project.heading')
                                    ->label('Section Heading')
                                    ->hint('Use <br> and <span class="org">RachTR</span> where needed.'),
                            Repeater::make('content.project.slides')
                                        ->label('Projects')
                                        ->schema([
                                            TextInput::make('title')
                                                ->label('Title'),
                                            RichEditor::make('description')
                                                ->label('Sub Title'),
                                            Grid::make(2)->schema([
                                                TextInput::make('btn')
                                                    ->label('Add read more/ view more button text'),
                                                TextInput::make('link')
                                                    ->label('Add read more/ view more Link')
                                                    ->url()
                                                    ->default('/blogs'),
                                            ]),
                                            Grid::make(2)->schema([
                                                FileUpload::make('image')
                                                    ->label('Mobile Image')
                                                    ->disk('public')
                                                    ->directory('images')
                                                    ->image()
                                                    ->imageEditor(),
                                                TextInput::make('img_alt')
                                                    ->label('Image alt attribute')
                                            ]),
                                        ])
                                        ->addActionLabel('Add Project Slide')
                                        ->orderable()
                                        ->collapsed()
                                        ->cloneable()
                                        ->default([])
                        ]),
                Section::make('Locations served Section')
                        ->schema([
                            TextInput::make('content.location.heading')->label('Loactions served Title'),
                            Grid::make(2)->schema([
                                FileUpload::make('content.location.image')
                                                    ->label('Mobile Image')
                                                    ->disk('public')
                                                    ->directory('images')
                                                    ->image()
                                                    ->imageEditor(),
                                TextInput::make('content.location.img_alt')
                                                    ->label('Image alt attribute')
                            ])
                        ]),
                Section::make('Experience Rachtr Section')
                        ->schema([
                            TextInput::make('content.experience.heading')->label('Experience Rachtr Section Title')->hint('Use <br> and <span class="org">RachTR</span> where needed to highlight in orange.'),
                            TextInput::make('content.experience.formHeading')->label('Experience Rachtr Form Title'),
                            TextInput::make('content.experience.formNote')->label('Experience Rachtr Form Note'),

                            Repeater::make('content.experience.images')
                                ->label('Image Slider part')
                                ->schema([
                                    Grid::make(2)->schema([
                                        FileUpload::make('image')
                                                    ->label('Image')
                                                    ->disk('public')
                                                    ->directory('images')
                                                    ->image()
                                                    ->imageEditor(),
                                        TextInput::make('img_alt')
                                                    ->label('Image alt attribute')
                                    ]),
                                ])
                                ->addActionLabel('Adds Image')
                        ]),
                 Section::make('Get Quote Section')
                    ->schema([
                        TextInput::make('content.quote.heading')->label('Section Heading'),
                        Grid::make(2)->schema([
                                FileUpload::make('content.quote.image')
                                                    ->label('Mobile Image')
                                                    ->disk('public')
                                                    ->directory('images')
                                                    ->image()
                                                    ->imageEditor(),
                                TextInput::make('content.quote.img_alt')
                                                    ->label('Image alt attribute')
                        ]),
                        TextInput::make('content.quote.get_btn_text')->label('Get a Quote Button Text')
                                    ->placeholder('Get a Quote'),
                        Grid::make(2)->schema([
                            TextInput::make('content.quote.whatsapp_btn')->label('Whatsapp Button Text'),
                            TextInput::make('content.quote.whatsapp_link')->label('Whatsapp Link')
                        ]),
                    ]),
                Section::make('Epoxy Flooring FAQ Section')
                    ->schema([
                        TextInput::make('content.faq_section_content.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading'),
                        Repeater::make('content.faq_section_content.faqs')
                            ->label('Faq Section')
                            ->schema([
                                Grid::make(2)->schema([
                                RichEditor::make('acc_title')->label('Title for FAQ'),
                                TiptapEditor::make('acc_body')
                                        ->profile('default')
                                        ->disableFloatingMenus()
                                        ->extraInputAttributes(['style' => 'max-height: 30rem; min-height: 24rem'])
                                         ]),
                            ])
                            ->addActionLabel('Adds FAQ Accordion')
                        ]),
                RichEditor::make('content.popular_searches')->label('Popular Searches')->columnSpanFull(),
               
        ];
    }

    public static function puFlooringTemplate(): array
    {
        return [
                Section::make('Banner Section')
                    ->schema([
                        FileUpload::make('content.banner.banner_image_desktop')->disk('public')->directory('images')->image()->label('Desktop Banner Image'),
                        FileUpload::make('content.banner.banner_image_mobile')->disk('public')->directory('images')->image()->label('Mobile Banner Image'),
                        TextInput::make('content.banner.banner_heading')->label('Banner Heading'),
                        TextInput::make('content.banner.breadcrumb_text')->label('Breadcrumb Text'),
                        TextInput::make('content.banner.breadcrumb_link')->url()->label('Breadcrumb Link'),
                    ]),
                Section::make('PU Flooring Description')
                    ->schema([
                        FileUpload::make('content.puFlooring.image')->disk('public')->directory('images')->image()->label('PU Flooring Image'),
                        TextInput::make('content.puFlooring.image_alt')->label('Image Alt Text'),
                        TipTapEditor::make('content.puFlooring.description')->label('PU Flooring Description'),
                    ]),
                Section::make('Flooring Section')
                    ->schema([
                        TextInput::make('content.flooring.pu_concrete_title')->label('PU Concrete Title'),
                        RichEditor::make('content.flooring.pu_concrete_description')->label('PU Concrete Description'),
                        FileUpload::make('content.flooring.pu_concrete_image')->disk('public')->directory('images')->image()->label('PU Concrete Image'),

                        TextInput::make('content.flooring.polyurea_flooring_title')->label('Polyurea Flooring Title'),
                        RichEditor::make('content.flooring.polyurea_flooring_description')->label('Polyurea Flooring Description'),
                        FileUpload::make('content.flooring.polyurea_flooring_image')->disk('public')->directory('images')->image()->label('Polyurea Flooring Image'),
                    ]),
                Section::make('Advantages Section')
                    ->schema([
                        Repeater::make('content.advantages.adv')
                            ->schema([
                                TextArea::make('icon')->label('Highlight Icon'),
                                TextInput::make('title')->label('Advantage Title'),
                                Textarea::make('description')->label('Advantage Description'),
                            ])
                            ->columns(2)
                            ->label('Advantages'),

                        TextInput::make('content.advantages.title')->label('Title for Advantages'),
                        TextArea::make('content.advantages.subhead')->label('Subhead for Advantages'),
                    ]),
                Section::make('PU Flooring Faq Section')
                    ->schema([
                        TextInput::make('content.faq_sections.heading')
                            ->label('Section Heading')
                            ->placeholder('Enter the heading'),
                        
                        Repeater::make('content.faq_sections.faqs')
                            ->label('Faq Section')
                            ->schema([
                                RichEditor::make('acc_title')->label('Title for FAQ'),
                                RichEditor::make('acc_body')->label('Dropdown description for FAQ'),
                            ])
                            ->addActionLabel('Adds FAQ Accordion'),
                        ]),
        ];
    }

    public static function contractorTemplate(): array
    {
        return [
            Section::make('Contractor Center')
                ->schema([
                    TextInput::make('content.banner.banner_heading')->label('Banner Heading'),
                    TextInput::make('content.banner.banner_alt')->label('Banner Image Alt'),
                    RichEditor::make('content.banner.banner_desc')->label('Banner Description'),
                    FileUpload::make('content.banner.banner_desktop')->directory('images')->disk('public')->label('Banner Image Desktop'),
                    FileUpload::make('content.banner.banner_mobile')->directory('images')->disk('public')->label('Banner Image Mobile'),
                ]),
            Section::make('Innovative Solutions')
                ->schema([
                    TextInput::make('content.solutions.innovative_heading')->label('Section Heading'),
                    RichEditor::make('content.solutions.innovative_description')->label('Section Description'),
                    FileUpload::make('content.solutions.innovative_image')->directory('images')->disk('public')->label('Section Image'),
                    TextInput::make('content.solutions.innovative_image_alt')->label('Section Image Alt'),
                ])->collapsible(),
            Section::make('Our Industries')
                ->schema([
                    TextInput::make('content.industries.industries_heading')->label('Industries Heading'),
                    TextInput::make('content.industries.industries_subheading')->label('Industries Subheading'),
                    Repeater::make('content.industries.industries_items')
                        ->schema([
                            TextInput::make('title')->label('Title'),
                            RichEditor::make('description')->label('Description'),
                            FileUpload::make('video_webm')->directory('videos')->disk('public')->acceptedFileTypes(['video/webm'])->label('Video (WEBM)'),
                            FileUpload::make('video_mp4')->directory('videos')->disk('public')->acceptedFileTypes(['video/mp4'])->label('Video (MP4)'),
                            TextInput::make('link')->label('Link'),
                        ])->columns(2),
                ])->collapsible(),
            Section::make('Application Videos')
                ->schema([
                    TextInput::make('content.application.app_videos_heading')->label('Videos Heading'),
                    RichEditor::make('content.application.app_videos_description')->label('Videos Description'),
                    Repeater::make('content.application.app_videos')
                        ->schema([
                            FileUpload::make('thumbnail')->directory('images')->disk('public')->label('Thumbnail Image'),
                            TextInput::make('video_title')->label('Thumbnail Image Alt'),
                            TextInput::make('video_link')->label('Video Link'),
                        ])->columns(2),
                    FileUpload::make('content.application.app_videos_bg_image')->directory('images')->disk('public')->label('Videos Background Image'),
                ])->collapsible(),
            Section::make('Collaboration Opportunities')
                ->schema([
                    TextInput::make('content.collaboration.collab_heading')->label('Collaboration Heading'),
                    RichEditor::make('content.collaboration.collab_left_content')->label('Left Content'),
                    RichEditor::make('content.collaboration.collab_right_content')->label('Right Content'),
                    TextInput::make('content.collaboration.collab_phone')->label('Phone Number'),
                    TextInput::make('content.collaboration.collab_btn')->label('Button Text'),
                ])->collapsible(),
        ];
    }

    public static function aboutTemplate(): array
    {
         return [
             Section::make('About Us Banner Section')
                ->schema([
                    TextInput::make('content.banner.banner_heading')->label('Banner Heading'),
                    FileUpload::make('content.banner.banner_image_desktop')->image()->directory('images')->disk('public')->label('Banner Image Desktop'),
                    FileUpload::make('content.banner.banner_image_mobile')->image()->directory('images')->disk('public')->label('Banner Image Mobile'),
                ]),
            Section::make('About Us Banner Section')
                ->schema([
                    // TextInput::make('content.about.heading')->label('About section Heading'),
                    TextInput::make('content.about.image_alt')->label('About section image alt tag'),
                    FileUpload::make('content.about.image')->image()->directory('images')->disk('public')->label('About section image'),
                    RichEditor::make('content.about.desc')->label('About us desc'),
                ]),
             Section::make('Highlights Section')
                ->schema([
                      Repeater::make('content.highlights')
                        ->schema([
                            TextInput::make('title')->label('Highlight Title'),
                            RichEditor::make('description')->label('Highlight Description'),
                            TextArea::make('icon')
                                ->label('Highlight Icon')
                        ])->columns(2),
                ]),
          
            Section::make('Founders Section')
            ->schema([
                      TextInput::make('content.founders.heading')->label('Founders Section Heading'),
                      Repeater::make('content.founders.founder')
                        ->schema([
                            FileUpload::make('image')->image()->directory('images')->disk('public')->label('Image of founder'),
                            TextInput::make('name')->label('Founder Name'),
                            TextInput::make('position')->label('Founder Position'),
                            TextArea::make('bio')->label('Founder Bio'),
                            TextInput::make('linkedin')->url()->label('Founder Linkedin Link'),
                        ])->columns(2),

                ]),
            Section::make('Mentors Section')
            ->schema([ 
                    TextInput::make('content.mentors.heading')->label('Founders Section Heading'),
                    Repeater::make('content.mentors.mentor')
                        ->schema([
                            FileUpload::make('image')->image()->directory('images')->disk('public')->label('Mentor Image'),
                            TextInput::make('name')->label('HighMentor Name'),
                            Textarea::make('details')->rows(2)->label('Mentor Details'),
                            TextInput::make('linkedin')->label('Linkedin link of mentor')->url(),
                        ])->columns(2),
                ]),

            TextInput::make('content.cta_heading')->label('Call to Action Heading'),
            TextInput::make('content.cta_button_text')->label('Call to Action Button Text'),
            TextInput::make('content.cta_whatsapp_link')->label('Call to Action WhatsApp Link')
                ->url()
                ->placeholder('https://wa.me/1234567890?text=Hello%20RachTR%20Team'),
         ];
    }

     public static function careerTemplate(): array
    {
        return [
            Section::make('Career Banner')
                ->schema([
                    TextInput::make('content.banner.heading')->label('Banner Heading')->placeholder('to get the text in orage color just put it inside span tag'),
                    Textarea::make('content.banner.description')->label('Banner Description'),
                    FileUpload::make('content.banner.image')->image()->directory('images')->disk('public')->label('Banner Image'),
                    TextInput::make('content.banner.button_text')->label('Banner Button Text'),
                    TextInput::make('content.banner.button_link')->url()->label('Banner Button Link'),
                ]),

            Section::make('Life at RachTR Section')
                ->schema([
                    TextInput::make('content.about.heading')->label('Life at rachtr (About rachtr) Section Heading'),
                    RichEditor::make('content.about.description')->label('Description'),
                    Repeater::make('content.about.gallery')
                        ->schema([
                            FileUpload::make('image')->image()->directory('images')->disk('public')->label('Gallery Image'),
                            TextInput::make('alt_text')->label('Alt Text'),
                        ])->columns(2),
                ]),

            Section::make('Why be a part of RachTRibe')
                ->schema([
                    TextInput::make('content.rachtribe.heading')->label('Section Heading'),
                    RichEditor::make('content.rachtribe.description')->label('Section Description'),
                    FileUpload::make('content.rachtribe.video_webm')->directory('videos')->disk('public')->acceptedFileTypes(['video/webm'])->label('Video WEBM'),
                    FileUpload::make('content.rachtribe.video_mp4')->directory('videos')->disk('public')->acceptedFileTypes(['video/mp4'])->label('Video MP4'),
                ]),

            Section::make('Current Openings Section')
                ->schema([
                    TextInput::make('content.openings.heading')->label('Current Openings Heading'),
                    RichEditor::make('content.openings.description')->label('Openings Description'),
                    TextInput::make('content.openings.job_board_link')->label('Job Board iFrame Link'),
                ]),

            Section::make('Collaboration Call to Action')
                ->schema([
                    TextInput::make('content.collaborate.heading')->label('Heading'),
                    RichEditor::make('content.collaborate.description')->label('Description at the left section'),
                    RichEditor::make('content.collaborate.desc_right1')->label('Description at the right section'),
                    RichEditor::make('content.collaborate.desc_right2')->label('Description at the right section 2'),
                    TextInput::make('content.collaborate.cta_text')->label('CTA Button Text'),
                    TextInput::make('content.collaborate.email')->email()->label('Email for Inquiries'),
                ]),
        ];
    }

    public static function architectTemplate(): array
    {
        return [
            Section::make('Architect Center Section')
                ->schema([
                    TextInput::make('content.banner.banner_heading')->label('Banner Heading'),
                    TextInput::make('content.banner.banner_alt')->label('Banner Image Alt'),
                    RichEditor::make('content.banner.banner_desc')->label('Banner Description'),
                    FileUpload::make('content.banner.banner_desktop')->directory('images')->disk('public')->acceptedFileTypes(['image/webp'])->label('Banner Image Desktop'),
                    FileUpload::make('content.banner.banner_mobile')->directory('images')->disk('public')->acceptedFileTypes(['image/webp'])->label('Banner Image Mobile'),
                ]),
            Section::make('Innovative Solutions Section')
                ->schema([
                    TextInput::make('content.solutions.innovative_heading')->label('Section Heading'),
                    RichEditor::make('content.solutions.innovative_description')->label('Section Description'),
                    FileUpload::make('content.solutions.innovative_image')->directory('images')->disk('public')->acceptedFileTypes(['image/webp'])->label('Section Image'),
                    TextInput::make('content.solutions.innovative_image_alt')->label('Section Image Alt'),
                ])->collapsible(),
            Section::make('Our Industries Section')
                ->schema([
                    TextInput::make('content.industries.industries_heading')->label('Industries Heading'),
                    TextInput::make('content.industries.industries_subheading')->label('Industries Subheading'),
                    Repeater::make('content.industries.industries_items')
                        ->schema([
                            TextInput::make('title')->label('Title'),
                            RichEditor::make('description')->label('Description'),
                            FileUpload::make('video_webm')->directory('videos')->disk('public')->acceptedFileTypes(['video/webm'])->label('Video (WEBM)'),
                            FileUpload::make('video_mp4')->directory('videos')->disk('public')->acceptedFileTypes(['video/mp4'])->label('Video (MP4)'),
                            TextInput::make('link')->label('Link'),
                        ])->columns(2),
                ])->collapsible(),
            Section::make('Case Studies section: ')
                        ->description('Add the details or case studies slider/block')
                        ->schema([
                            TextInput::make('content.case_study.heading')
                                    ->label('Section Heading')
                                    ->hint('Use <br> and <span class="color-orange">RachTR</span> where needed.'),
                            RichEditor::make('content.case_study.description')
                                    ->label('Section Description'),
                            Repeater::make('content.case_study.slides')
                                        ->label('Case Studies')
                                        ->schema([
                                            TextInput::make('right_title')
                                                ->label('Right block Title'),

                                            Textarea::make('subtitle')
                                                ->label('Right Block Sub Title')
                                                ->rows(2),
                                            TextInput::make('left_title')
                                                ->label('Left block Title'),
                                            Repeater::make('paragraphs')
                                                ->label('Case study left block descrption')
                                                ->schema([
                                                    Textarea::make('text')
                                                        ->label('Paragraph Text')
                                                        ->rows(3),
                                                ])
                                                ->defaultItems(2)
                                                ->addActionLabel('Add Paragraph'),

                                            TextInput::make('link')
                                                ->label('External Link')
                                                ->placeholder('Paste a URL if available')
                                                ->reactive(),

                                            FileUpload::make('fallback_file')
                                                ->label('Or Upload a File')
                                                ->directory('pdfFile') // your desired storage directory
                                                ->disk('public')
                                                ->hint('⚠️ Note: Uploading a file with the same name will replace the existing one. Rename the file before uploading to avoid this.')
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->reactive()
                                                ->preserveFilenames(),
                                            TextInput::make('img_alt')
                                                ->label('Image alt attribute'),

                                            FileUpload::make('image_desktop')
                                                ->label('Desktop Image')
                                                ->disk('public')
                                                ->directory('images')
                                                ->image()
                                                ->acceptedFileTypes(['image/webp'])
                                                ->imageEditor(),
                                        ])
                                        ->columns(2)
                                        ->addActionLabel('Add Case Study')
                                        ->orderable()
                                        ->collapsed()
                                        ->cloneable()
                        ]),
            Section::make('Projects showcase section')
                ->schema([
                    TextInput::make('content.showcase.heading')->label('Project Showcase Heading'),
                    Repeater::make('content.showcase.items')
                        ->schema([
                            RichEditor::make('description')->label('Description'),
                            Repeater::make('images')->schema([
                                Grid::make(2)->schema([
                                    FileUpload::make('image')->directory('images')->disk('public')->image()->acceptedFileTypes(['image/webp'])->label('Project Image'),
                                    TextInput::make('img_alt')->label('Image alt'),
                                ])
                            ]),
                        ])->columns(2),
                ])->collapsible(),
            Section::make('Collaboration Opportunities')
                ->schema([
                    TextInput::make('content.collaboration.collab_heading')->label('Collaboration Heading'),
                    RichEditor::make('content.collaboration.collab_left_content')->label('Left Content'),
                    RichEditor::make('content.collaboration.collab_right_content')->label('Right Content'),
                    TextInput::make('content.collaboration.collab_phone')->label('Phone Number'),
                    TextInput::make('content.collaboration.collab_btn')->label('Button Text'),
                ])->collapsible(),
            Section::make('Architect Marvel Section')
                ->schema([
                    TextInput::make('content.architect.heading')->label('Architect marvels Heading'),
                    Repeater::make('content.architect.marvels')->schema([
                                TextInput::make('heading')->label('Heading of the marvel slide'),
                                Repeater::make('details')->schema([
                                    Grid::make(3)->schema([
                                        TextArea::make('icon')->label('Highlight Icon'),
                                        TextInput::make('heading')->label('Detail heading'),
                                        TextInput::make('desc')->label('Detail Description')
                                    ]),
                                ]),
                                RichEditor::make('para')->label('Description para for the marvel slide'),
                                Grid::make(3)->schema([
                                    TextInput::make('awards_text')->label('titlefor the awards pointer')->hint('titlefor the awards pointer - by default it is "Awards"'),
                                    TextArea::make('awards_icon')->label('Awards Icon'),
                                    RichEditor::make('awards_desc')->label('Description para for the awards pointer')
                                ]),
                                 Repeater::make('images')->schema([
                                    Grid::make(2)->schema([
                                        FileUpload::make('image')->directory('images')->disk('public')->image()->acceptedFileTypes(['image/webp'])->label('Marvel Image'),
                                        TextInput::make('img_alt')->label('Image alt'),
                                    ])
                                ]),
                            ]),
                    
                ])->collapsible(),
            
        ];
    }
}
