<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Pages as Page;
use App\Models\CommonComponents;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CommonComponentResource\Pages;
use App\Filament\Resources\CommonComponentResource\RelationManagers;

class CommonComponentResource extends Resource
{
    protected static ?string $model = CommonComponents::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Component')
                    ->description('Basic Component details.')
                    ->schema([
                                TextInput::make('name')->label('Template name')->required(),
                                Select::make('type')
                                ->options([
                                    'header' => 'Header',
                                    'footer' => 'Footer'
                                ]),
                            ]),
                Section::make('Component Content')
                        ->description('Fill in the dynamic components')
                        ->schema([
                            FileUpload::make('content.logo')
                                    ->label('Logo Image')
                                    ->image()
                                    ->directory('images')
                                    ->required(),
                            Repeater::make('content.menu-items')
                                    ->label('Add the Menu Items')
                                    ->schema([
                                        TextInput::make('item')->label('Menu Item Name')->required(),
                                        Checkbox::make('has_link')
                                                ->label('Enable Link')
                                                ->default(false)
                                                ->reactive(),
                                        TextInput::make('slug')->label('Slug')
                                                ->placeholder('e.g., about-us or support-center/architect-center etc')
                                                ->required()
                                                ->visible(fn ($get) => $get('has_link')),
                                        Repeater::make('sub_items')
                                        ->label('Add the Sub Menu Items')
                                        ->schema([
                                            TextInput::make('sub-item')->label('Sub Menu Item Name')->required(),
                                            Checkbox::make('has_link')
                                                ->label('Enable Link')
                                                ->default(false)
                                                ->reactive(),
                                            TextInput::make('slug')->label('Slug')
                                                ->placeholder('e.g., about-us or support-center/architect-center etc')
                                                ->required()
                                                ->visible(fn ($get) => $get('has_link')),
                                            Repeater::make('sub_items')
                                                ->label('Add the Sub Menu Items')
                                                ->schema([
                                                    TextInput::make('sub-item')->label('Sub Menu Item Name')->required(),
                                                    Checkbox::make('has_link')
                                                        ->label('Enable Link')
                                                        ->default(false)
                                                        ->reactive(),
                                                    TextInput::make('slug')->label('Slug')
                                                        ->placeholder('e.g., about-us or support-center/architect-center etc')
                                                        ->required()
                                                        ->visible(fn ($get) => $get('has_link')),
                                                            
                                                    ])
                                                    ->defaultItems(0)
                                                    ->addActionLabel('Sub Menu Content'),
                                        ])
                                        ->defaultItems(0)
                                        ->addActionLabel('Sub menu Content'),
                                        
                                    ])
                                    ->columns(1)
                                    ->defaultItems(0)
                                    ->addActionLabel('Menu Content'),
                        ]),

                        
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
            
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options(['header' => 'Header', 'footer' => 'Footer']),
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
            'index' => Pages\ListCommonComponents::route('/'),
            'create' => Pages\CreateCommonComponent::route('/create'),
            'edit' => Pages\EditCommonComponent::route('/{record}/edit'),
        ];
    }
}
