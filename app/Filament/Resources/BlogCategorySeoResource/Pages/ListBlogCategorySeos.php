<?php

namespace App\Filament\Resources\BlogCategorySeoResource\Pages;

use App\Filament\Resources\BlogCategorySeoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogCategorySeos extends ListRecords
{
    protected static string $resource = BlogCategorySeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
