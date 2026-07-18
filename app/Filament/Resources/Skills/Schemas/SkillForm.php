<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Keahlian / Skill')
                    ->description('Kelola keahlian teknologi Anda yang akan ditampilkan di portofolio.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Skill')
                            ->placeholder('Contoh: PHP, React, Laravel')
                            ->required(),

                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Backend' => 'Backend',
                                'Frontend' => 'Frontend',
                                'Tools' => 'Tools',
                            ])
                            ->required(),

                        Select::make('level')
                            ->label('Tingkat Kemahiran')
                            ->options([
                                'Beginner' => 'Beginner',
                                'Intermediate' => 'Intermediate',
                                'Advanced' => 'Advanced',
                                'Expert' => 'Expert',
                            ])
                            ->required(),

                        Group::make()
                            ->relationship('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Icon Skill (PNG/SVG)')
                                    ->image()
                                    ->directory('skills')
                                    ->disk('public')
                                    ->maxSize(1024)
                                    ->helperText('Gunakan gambar dengan format PNG/SVG dengan rasio 1:1.'),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
