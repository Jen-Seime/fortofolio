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
                Section::make('Gambar & Galeri Project')
                    ->description('Kelola gambar utama dan galeri tambahan untuk project Anda.')
                    ->columns(2)
                    ->schema([
                        Group::make()
                            ->relationship('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Gambar Utama (Cover)')
                                    ->directory('Gambar-project')
                                    ->disk('public')
                                    ->visibility('public')
                                    ->image()
                                    ->imageEditor()
                                    ->required()
                                    ->helperText('Gambar ini akan ditampilkan sebagai cover utama project.'),
                                Hidden::make('type')
                                    ->default('cover'),
                            ]),

                        Repeater::make('thumbnails')
                            ->relationship('thumbnails')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Foto Galeri / Detail')
                                    ->directory('Gambar-project')
                                    ->disk('public')
                                    ->visibility('public')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                                Hidden::make('type')
                                    ->default('thumbnail'),
                            ])
                            ->label('Galeri Pendukung')
                            ->grid(2)
                            ->helperText('Unggah beberapa gambar pendukung atau screenshot detail project.'),

                    ])->columnSpanFull(),

                Section::make('Detail Informasi Project')
                    ->description('Lengkapi data informasi dan tautan project Anda.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Project')
                            ->placeholder('Contoh: Sistem Informasi Keuangan')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state)))
                            ->required(),

                        TextInput::make('slug')
                            ->label('Slug URL')
                            ->placeholder('otomatis-dibuat-dari-judul')
                            ->required()
                            ->helperText('Digunakan untuk URL halaman detail project.'),

                        Select::make('category_role_id')
                            ->relationship('category_role', 'name')
                            ->label('Peran Kategori (Category Role)')
                            ->searchable()
                            ->preload()
                            ->required(),

                        DatePicker::make('date')
                            ->label('Tanggal Selesai / Rilis')
                            ->native(false)
                            ->displayFormat('d M Y')
                            ->required(),

                        TagsInput::make('technology')
                            ->label('Teknologi yang Digunakan')
                            ->placeholder('Ketik lalu tekan enter (Contoh: Laravel, TailwindCSS, Livewire)')
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('demo_link')
                            ->label('Tautan Live Demo')
                            ->placeholder('https://myproject.com')
                            ->prefix('https://')
                            ->nullable(),

                        TextInput::make('github_link')
                            ->label('Tautan Source Code (GitHub)')
                            ->placeholder('github.com/username/project')
                            ->prefix('github.com/')
                            ->nullable(),

                        Toggle::make('is_featured')
                            ->label('Tampilkan Sebagai Project Pilihan (Featured)')
                            ->helperText('Aktifkan agar project ini tampil secara eksklusif di halaman depan portofolio.')
                            ->onColor('success')
                            ->offColor('danger')
                            ->required()
                            ->columnSpanFull(),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->label('Deskripsi Lengkap Project')
                            ->placeholder('Tuliskan detail tantangan, solusi, fitur-fitur, dan proses pembuatan project ini...')
                            ->required(),
                    ])->columnSpanFull(),
            ]);
    }
}
