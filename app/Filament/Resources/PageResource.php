<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CommonComponents;
use Filament\Resources\Resource;
use RalphJSmit\Filament\SEO\SEO;
use App\Models\Pages as PageModel;
use Filament\Forms\Components\Select;
use App\Filament\Components\CustomSEO;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;
use Filament\Forms\Components\Textarea;

class PageResource extends Resource
{
    protected static ?string $model = PageModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $products = Product::pluck('name', 'id')->toArray();
        return $form
            ->schema([
                Section::make('Page')
                    ->description('Basic page details and structure.')
                    ->schema([
                        TextInput::make('title')->label('Page name')->required(),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->placeholder('Enter the slug')
                            ->visible(fn (callable $get) => !$get('is_hompage'))->required(),
                        Checkbox::make('is_homepage')
                            ->label('Set as Homepage')
                            ->default(false)
                            ->helperText('Only one post can be the homepage at a time.'),
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
               
                Section::make('SEO Details')
                    ->description('Seo details for page')
                    ->schema([
                        SEO::make(['title', 'description', 'robots', 'canonical_url','meta'])
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
                                // Set the focus_keywords state with the existing tags
                                $component->state($meta['focus_keywords'] ?? []);
            
                            }
                             }),
                        Textarea::make('schema_data')
                             ->label('JSON Schema')
                             ->rows(10) 
                             ->rules(['nullable', 'json']) // Ensures valid JSON
                             ->placeholder('Enter JSON here...')
                       
                    ]),
               
                Section::make('Page Template Details : ')
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
                                            return CommonComponents::where('type', 'header')
                                                ->pluck('type', 'id')
                                                ->toArray() ?: [];
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
                                            return CommonComponents::where('type', 'footer')
                                                ->pluck('type', 'id')
                                                ->toArray() ?: [];
                                        } catch (\Exception $e) {
                                            return [];
                                        }
                                    })
                                    ->placeholder('Select Template')
                                    ->required(),
                                ]),
                    Section::make('Add Page Content')
                            ->description('Add section,images and products')
                            ->schema([
                                FileUpload::make('content.banner_image')
                                            ->image()
                                            ->disk('public')
                                            ->directory('images')
                                            ->label('Banner Image')
                                            ->required(),
                                TextInput::make('content.page_heading')
                                            ->label('Page Heading')
                                            ->required(),
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
                                                RichEditor::make('acc_title')->label('Title for FAQ')->required(),
                                                RichEditor::make('acc_body')->label('Dropdown description for FAQ')->required(),
                                                    ])
                                            ->addActionLabel('Adds FAQ Accordian')
                                            ->hidden(fn (callable $get) => !$get('has_faq')),
                                Repeater::make('content.sections')
                                            ->label('Page Sections')
                                            ->schema([
                                                TextInput::make('section_heading')
                                                        ->label('Section Heading')
                                                        ,
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

                                
                            ])
                            ->hidden(fn (callable $get) => !$get('content.is_product_list')),
                       
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
}
