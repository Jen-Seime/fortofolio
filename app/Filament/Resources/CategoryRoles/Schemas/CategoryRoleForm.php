<?php

namespace App\Filament\Resources\CategoryRoles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryRoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Kategori Peran / Category Role')
                    ->description('Kelola kategori peran pekerjaan untuk membedakan project-project Anda di portofolio.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Kategori Peran')
                            ->placeholder('Contoh: Fullstack Developer, UI/UX Designer, Mobile Developer')
                            ->required(),
                    ])->columnSpanFull(),
            ]);
    }
}
