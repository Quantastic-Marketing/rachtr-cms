<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use RalphJSmit\Filament\SEO\SEO;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Page')
                    ->description('Basic page details and structure.')
                    ->schema([
                            TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                            TextInput::make('slug')
                                ->required()
                                ->unique(
                                    table: Product::class,
                                    column: 'slug',
                                    ignorable: fn ($record) => $record // Ignore the current record when editing
                                )
                                ->maxLength(255),
                            Select::make('template')
                                ->options([
                                    'default-template' => 'Default Product Template'
                                ])
                                ->required()
                                ->reactive() 
                                ->afterStateUpdated(function ($state, callable $set) {
                                    $set('content', []);
                                }),
                    ]),
                Section::make('Page content')
                    ->schema(function (callable $get) {
                        $template = $get('template');

                        return match ($template) {
                            'default-template' => [
                                Repeater::make('content.product_images')
                                    ->label('Product Images')
                                    ->schema([
                                        FileUpload::make('product_image')
                                            ->label('Image')
                                            ->image()
                                            ->directory('images')
                                            ->required(),
                                    ])
                                    ->columns(1)
                                    ->defaultItems(0)
                                    ->addActionLabel('Add Image'),
                                Repeater::make('content.product_benefits')
                                    ->label('Benefits Accordion')
                                    ->schema([
                                        TextInput::make('benefit_title')->label('Title for benefit'),
                                        
                                        RichEditor::make('benefit_body')->label('Dropdown description for benefit'),
                                    ])
                                    ->columns(1)
                                    ->defaultItems(0)
                                    ->addActionLabel('Add Benefits Accordian'),
                                TextInput::make('content.product_desc')->label('Description of Product'),
                                Repeater::make('content.product_lists')
                                    ->label('Product Bullet Lists')
                                    ->schema([
                                        TextInput::make('list')->label('Product Description List '),
                                    ])
                                    ->columns(1)
                                    ->defaultItems(0),
                                TextInput::make('content.download_sheet')
                                    ->label('Product Download Sheet URL')
                                    ->url()
                                    ->placeholder('https://example.com'),
                                TextInput::make('content.download_cert')
                                    ->label('Product Download Certificate URL')
                                    ->url()
                                    ->placeholder('https://example.com'),
                            
                            ],
                            default => [], // No fields until a template is selected
                        };
                    })
                    ->collapsible(),
                Section::make('Product Page SEO')
                    ->description('Basic page seo  details.')
                    ->schema([
                        SEO::make()
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
                                ->nullable(),
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
                        ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Product Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('template')
                    ->label('Template')
                    ->sortable(),
                TextColumn::make('seo.title')
                    ->label('SEO Title')
                    ->sortable()
                    ->searchable()
                    ->default('N/A'),
                TextColumn::make('seo.description')
                    ->label('SEO Title')
                    ->sortable()
                    ->searchable()
                    ->default('N/A'),
                TextColumn::make('seo.description')
                    ->label('SEO Description')
                    ->sortable()
                    ->searchable()
                    ->default('N/A'),
                TextColumn::make('seo.robots')
                    ->label('SEO Robot')
                    ->sortable()
                    ->searchable()
                    ->default('N/A'),
                TextColumn::make('seo.canonical_url')
                    ->label('SEO Canonical URL')
                    ->sortable()
                    ->searchable()
                    ->default('N/A'),
                TextColumn::make('content.product_desc')
                    ->label('Description')
                    ->limit(50) // Truncate long descriptions
                    ->tooltip(fn ($state) => $state), // Full text on hover
                TextColumn::make('content.download_cert')
                    ->label('Certificate')
                    ->formatStateUsing(fn ($state) => $state ? 'Yes' : 'No'),
                TextColumn::make('content.download_sheet')
                    ->label('Certificate')
                    ->formatStateUsing(fn ($state) => $state ? 'Yes' : 'No'),
                BooleanColumn::make('is_active')
                    ->label('Active')
                    ->sortable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
