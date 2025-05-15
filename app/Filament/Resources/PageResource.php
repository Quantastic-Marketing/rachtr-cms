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
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Group;
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
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
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
                Section::make('Epoxy Flooring Applications Section')
                ->schema([
                    TextInput::make('content.application.heading')
                        ->label('Section Heading')
                        ->placeholder('Enter the heading'),
                    
                    RichEditor::make('content.application.paragraph')
                                ->label('Paragraph')
                                ->placeholder('Intro paragraph about Epoxy Flooring Applications.'),
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
                RichEditor::make('content.popular_searches')
                                                            ->label('Popular Searches')
                                                                    ->columnSpanFull(),
               
        ];
    }

    public static function puFlooringTemplate(): array
    {
        return [
                Section::make('PU Flooring Faq Section')
                ->schema([
                    TextInput::make('content.faq_section.heading')
                        ->label('Section Heading')
                        ->placeholder('Enter the heading'),
                    
                    Repeater::make('content.faq_section.faqs')
                        ->label('Faq Section')
                        ->schema([
                            RichEditor::make('acc_title')->label('Title for FAQ'),
                            RichEditor::make('acc_body')->label('Dropdown description for FAQ'),
                        ])
                        ->addActionLabel('Adds FAQ Accordion'),
                    ]),
        ];
    }
}
