<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProductsSection;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductSectionResource\Pages;
use App\Filament\Resources\ProductSectionResource\RelationManagers;

class ProductSectionResource extends Resource
{
    protected static ?string $model = ProductsSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Product Tags';

    public static function form(Form $form): Form
    {
        $products = Product::pluck('name', 'id')->toArray();
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Section Name')
                    ->unique(ignoreRecord: true)
                    ->placeholder('e.g., Trending, Recommended')
                    ->required()
                    ->maxLength(255),
                Select::make('product_ids')
                    ->label('Select Products')
                    ->multiple()
                    ->options($products)
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $products = Product::pluck('name', 'id')->toArray();
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('product_ids')
                            ->label('Product Count')
                            ->getStateUsing(fn ($record) => count($record->product_ids) . ' products'),

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
            'index' => Pages\ListProductSections::route('/'),
            'create' => Pages\CreateProductSection::route('/create'),
            'edit' => Pages\EditProductSection::route('/{record}/edit'),
        ];
    }
}
