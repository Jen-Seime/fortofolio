<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Berkas & Logo Sertifikasi')
                    ->description('Unggah logo penerbit sertifikat serta salinan digital sertifikat Anda.')
                    ->columns(2)
                    ->schema([
                        Group::make()
                            ->relationship('issuerLogo')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Logo Penerbit (Issuer Logo)')
                                    ->directory('Issuer-Logo')
                                    ->disk('public_uploads')
                                    ->visibility('public')
                                    ->image()
                                    ->imageEditor()
                                    ->required()
                                    ->helperText('Unggah logo penerbit (Rekomendasi rasio 1:1, format PNG/JPG).'),

                                Hidden::make('type')
                                    ->default('logo'),
                            ]),

                        Group::make()
                            ->relationship('pdfFile')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Berkas Sertifikat (PDF)')
                                    ->directory('File-Pdf')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->maxSize(5120) // 5MB
                                    ->disk('public_uploads')
                                    ->getUploadedFileNameForStorageUsing(function ($file) {
                                        return time().'_'.$file->getClientOriginalName();
                                    })
                                    ->required()
                                    ->helperText('Unggah salinan sertifikat resmi Anda (Format: PDF, Maksimal 5MB).'),

                                Hidden::make('type')
                                    ->default('pdf'),
                            ]),
                    ])->columnSpanFull(),

                Section::make('Detail Kredensial Sertifikasi')
                    ->description('Lengkapi data resmi sertifikat untuk verifikasi kredensial.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Nama Sertifikasi')
                            ->placeholder('Contoh: AWS Certified Solutions Architect')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state)))
                            ->required(),

                        TextInput::make('slug')
                            ->label('Slug URL')
                            ->placeholder('otomatis-dibuat-dari-judul')
                            ->required()
                            ->helperText('Digunakan untuk identifikasi unik halaman detail sertifikasi.'),

                        TextInput::make('issuer')
                            ->label('Organisasi Penerbit')
                            ->placeholder('Contoh: Amazon Web Services, Google, Dicoding')
                            ->required(),

                        DatePicker::make('issue_date')
                            ->label('Tanggal Terbit')
                            ->native(false)
                            ->displayFormat('d M Y')
                            ->required(),

                        TextInput::make('credential_id')
                            ->label('ID Kredensial (Credential ID)')
                            ->placeholder('Contoh: AWS-12345ABC')
                            ->required(),

                        TextInput::make('verification_url')
                            ->label('Tautan Verifikasi Kredensial')
                            ->placeholder('https://verify.org/cert/123')
                            ->prefix('https://')
                            ->required(),

                        TagsInput::make('skills_covered')
                            ->label('Keahlian / Materi yang Dicakup')
                            ->placeholder('Ketik keahlian lalu tekan enter (Contoh: Cloud Computing, DevOps, Python)')
                            ->columnSpanFull()
                            ->required(),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->label('Deskripsi & Silabus Sertifikasi')
                            ->placeholder('Tuliskan ringkasan materi, apa yang Anda pelajari, dan kompetensi yang diujikan dalam sertifikasi ini...')
                            ->required(),
                    ])->columnSpanFull(),
            ]);
    }
}
