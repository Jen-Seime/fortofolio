<?php

namespace App\Filament\Resources\Profils\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProfilForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->relationship('image')
                    ->schema([
                        FileUpload::make('url')
                            ->label('Foto')
                            ->directory('Foto-profil')
                            ->disk('public')
                            ->visibility('public')
                            ->image()
                            ->required(),
                    ]),

                Section::make('Profil')
                    ->columnSpanFull()
                    ->columns(3)
                    // ->icon('Heroicon::user')
                    ->schema([
                        TextInput::make('full_name')
                            ->label('Nama Lengkap')
                            ->required(),

                        TextInput::make('nickname')
                            ->label('Nama Panggilan')
                            ->required(),

                        TextInput::make('role')
                            ->label('Role')
                            ->required(),

                        TextInput::make('address')
                            ->label('Alamat')
                            ->required(),

                        TextInput::make('phone')
                            ->label('Telepon')
                            ->required(),

                        TextInput::make('email')
                            ->label('Email')
                            ->required(),

                    ]),

                Section::make('')
                    ->columnSpanFull()
                // ->icon('Heroicon::user')
                    ->schema([
                        Textarea::make('bio')
                            ->rows(10)
                            ->cols(10)
                            ->label('Bio Data')
                            ->required(),

                        MarkdownEditor::make('about')
                            ->label('Tentang Saya')
                            ->required(),

                    ]),

                Section::make('Media')
                    ->columnSpanFull()
                    ->columns(3)
                // ->icon('Heroicon::user')
                    ->schema([
                        TextInput::make('github')
                            ->label('GitHub')
                            ->required(),

                        TextInput::make('linkedin')
                            ->label('Linkedin')
                            ->required(),

                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->required(),

                        TextInput::make('cv_file')
                            ->label('CV'),

                    ]),
            ]);
    }
}
