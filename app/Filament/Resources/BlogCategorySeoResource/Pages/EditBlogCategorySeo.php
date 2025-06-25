<?php

namespace App\Filament\Resources\BlogCategorySeoResource\Pages;

use App\Filament\Resources\BlogCategorySeoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogCategorySeo extends EditRecord
{
    protected static string $resource = BlogCategorySeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
