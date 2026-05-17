<?php

namespace App\Filament\Resources\CategoryRoles\Pages;

use App\Filament\Resources\CategoryRoles\CategoryRoleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategoryRoles extends ListRecords
{
    protected static string $resource = CategoryRoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
