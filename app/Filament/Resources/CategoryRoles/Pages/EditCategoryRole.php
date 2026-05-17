<?php

namespace App\Filament\Resources\CategoryRoles\Pages;

use App\Filament\Resources\CategoryRoles\CategoryRoleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCategoryRole extends EditRecord
{
    protected static string $resource = CategoryRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
