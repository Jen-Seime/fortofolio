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
                Section::make('Foto Profil')
                    ->description('Unggah foto profil resmi Anda.')
                    ->schema([
                        Group::make()
                            ->relationship('image')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Foto')
                                    ->directory('Foto-profil')
                                    ->disk('public_uploads')
                                    ->visibility('public')
                                    ->image()
                                    ->avatar()
                                    
                                    ->imageEditor()
                                    ->required()
                                    ->alignCenter(),
                            ]),
                    ]),

                Section::make('Informasi Pribadi')
                    ->description('Lengkapi detail biodata dan kontak Anda.')
                    ->columnSpanFull()
                    ->columns(3)
                    ->schema([
                        TextInput::make('full_name')
                            ->label('Nama Lengkap')
                            ->placeholder('Contoh: Alex Mercer')
                            ->required(),

                        TextInput::make('nickname')
                            ->label('Nama Panggilan')
                            ->placeholder('Contoh: Alex')
                            ->required(),

                        TextInput::make('role')
                            ->label('Pekerjaan / Role')
                            ->placeholder('Contoh: IT Student & Web Developer')
                            ->required(),

                        TextInput::make('phone')
                            ->label('Nomor Telepon')
                            ->placeholder('Contoh: 8123456789')
                            ->tel()
                            ->prefix('+62')
                            ->required(),

                        TextInput::make('email')
                            ->label('Alamat Email')
                            ->placeholder('Contoh: alex@domain.com')
                            ->email()
                            ->required(),

                        TextInput::make('address')
                            ->label('Alamat Tinggal')
                            ->placeholder('Contoh: Jakarta, Indonesia')
                            ->required(),
                    ]),

                Section::make('Deskripsi & Narasi')
                    ->description('Tuliskan bio singkat dan cerita tentang diri Anda secara mendalam.')
                    ->columnSpanFull()
                    ->schema([
                        Textarea::make('bio')
                            ->rows(3)
                            ->label('Bio Singkat')
                            ->placeholder('Tuliskan bio singkat satu kalimat yang menarik...')
                            ->required(),

                        MarkdownEditor::make('about')
                            ->label('Tentang Saya (Detail)')
                            ->placeholder('Ceritakan tentang latar belakang, keahlian, minat, dan apa yang Anda pelajari...')
                            ->required(),
                    ]),

                Section::make('Sosial Media & Berkas')
                    ->description('Hubungkan profil sosial media dan berkas CV profesional Anda.')
                    ->columnSpanFull()
                    ->columns(2)
                    ->schema([
                        TextInput::make('github')
                            ->label('Tautan GitHub')
                            ->placeholder('github.com/username')
                            ->prefix('github.com/')
                            ->required(),

                        TextInput::make('linkedin')
                            ->label('Tautan LinkedIn')
                            ->placeholder('linkedin.com/in/username')
                            ->prefix('linkedin.com/in/')
                            ->required(),

                        TextInput::make('instagram')
                            ->label('Tautan Instagram')
                            ->placeholder('instagram.com/username')
                            ->prefix('instagram.com/')
                            ->required(),

                        FileUpload::make('cv_file')
                            ->label('Unduh Berkas CV (PDF)')
                            ->directory('cv')
                            ->disk('public_uploads')
                            ->visibility('public')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(5120)
                            ->helperText('Unggah berkas CV terbaru Anda (Format: PDF, Maksimal 5MB)'),
                    ]),
            ]);
    }
}
