<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Image Project')
                    ->columns(2)
                    ->schema([

                        Group::make()
                            ->relationship('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Gambar Project')
                                    ->directory('Gambar-project')
                                    ->disk('public')
                                    ->visibility('public')
                                    ->image()
                                    ->required(),
                                Hidden::make('type')
                                    ->default('cover'),
                            ]),

                        Repeater::make('thumbnails')
                            ->relationship('thumbnails')
                            ->schema([
                                FileUpload::make('url')

                                    ->label('Thumbnail')
                                    ->directory('Gambar-project')
                                    ->disk('public')
                                    ->visibility('public')
                                    ->image()
                                    ->required(),
                                Hidden::make('type')
                                    ->default('thumbnail'),
                            ]),

                    ])->columnSpanFull(),

                Section::make('Project Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Project')
                            ->required(),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required(),

                        Select::make('category_role_id')
                            ->relationship('category_role', 'name')
                            ->label('Category Role')
                            ->required(),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()

                            ->label('Deskripsi Project')
                            ->required(),

                        TagsInput::make('technology')
                            ->label('Teknologi')
                            ->required(),

                        TextInput::make('demo_link')
                            ->label('Link Project')
                            ->nullable(),

                        TextInput::make('github_link')
                            ->label('Link Source Code')
                            ->nullable(),

                        DatePicker::make('date')
                            ->label('Tanggal')
                            ->required(),

                        Toggle::make('is_featured')
                            ->label('Project Pilihan')
                            ->required(),

                    ])->columnSpanFull(),
            ]);
    }
}
