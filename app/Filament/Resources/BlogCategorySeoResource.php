<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\BlogCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BlogCategorySeoResource\Pages;
use App\Filament\Resources\BlogCategorySeoResource\RelationManagers;

class BlogCategorySeoResource extends Resource
{
    protected static ?string $model = BlogCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-magnifying-glass';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->disabled(),
                TextInput::make('slug')->disabled(),
                TextInput::make('seo_title')->label('SEO Title'),
                Textarea::make('seo_description')->label('SEO Description'),
                TagsInput::make('seo_keywords')
                        ->label('Focus Keywords')
                        ->placeholder('Enter keywords separated by commas...')
                        ->helperText('Add focus keywords for SEO analysis.'),
                TextInput::make('canonical_url')->label('SEO canonical url')->url(),
                Select::make('robots')
                    ->label('Robots')
                    ->options([
                        'index, follow' => 'Index, Follow',
                        'noindex, follow' => 'NoIndex, Follow',
                        'index, nofollow' => 'Index, NoFollow',
                        'noindex, nofollow' => 'NoIndex, NoFollow',
                    ])
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('seo_title')->label('SEO Title'),
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
            'index' => Pages\ListBlogCategorySeos::route('/'),
            'create' => Pages\CreateBlogCategorySeo::route('/create'),
            'edit' => Pages\EditBlogCategorySeo::route('/{record}/edit'),
        ];
    }

    public static function getModel(): string
    {
        return BlogCategory::class;
    }

    public static function getNavigationLabel(): string
    {
        return 'Blog Category SEO';
    }
}
