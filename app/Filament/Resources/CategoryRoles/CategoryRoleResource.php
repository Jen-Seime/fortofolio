<?php

namespace App\Filament\Resources\CategoryRoles;

use App\Filament\Resources\CategoryRoles\Pages\CreateCategoryRole;
use App\Filament\Resources\CategoryRoles\Pages\EditCategoryRole;
use App\Filament\Resources\CategoryRoles\Pages\ListCategoryRoles;
use App\Filament\Resources\CategoryRoles\Schemas\CategoryRoleForm;
use App\Filament\Resources\CategoryRoles\Tables\CategoryRolesTable;
use App\Models\CategoryRole;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategoryRoleResource extends Resource
{
    protected static ?string $model = CategoryRole::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CategoryRoleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoryRolesTable::configure($table);
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
            'index' => ListCategoryRoles::route('/'),
            'create' => CreateCategoryRole::route('/create'),
            'edit' => EditCategoryRole::route('/{record}/edit'),
        ];
    }
}
