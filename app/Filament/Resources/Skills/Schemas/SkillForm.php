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
                Section::make('Detail Skill')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Skill')
                            ->placeholder('Contoh: PHP')
                            ->required(),
                        Select::make('level')
                            ->label('Level')
                            ->options([
                                'Beginner' => 'Beginner',
                                'Intermediate' => 'Intermediate',
                                'Advanced' => 'Advanced',
                                'Expert' => 'Expert',
                            ])
                            ->required(),
                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'Backend' => 'Backend',
                                'Frontend' => 'Frontend',
                                'Tools' => 'Tools',
                            ])
                            ->required(),

                        Group::make()
                            ->relationship('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Icon (PNG)')
                                    ->image()
                                    ->directory('skills')
                                    ->disk('public'),
                            ]),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
