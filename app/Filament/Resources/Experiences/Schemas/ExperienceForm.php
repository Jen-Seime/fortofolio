<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Pengalaman')
                    ->description('Kelola riwayat karir, posisi, perusahaan, serta teknologi yang Anda gunakan.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('type')
                            ->label('jenis Pengalaman')
                            ->placeholder('Contoh: "Kerja" atau "Freelance" ')
                            ->required(),

                        TextInput::make('position')
                            ->label('Posisi / Jabatan')
                            ->placeholder('Contoh: Senior Fullstack Developer')
                            ->required(),

                        TextInput::make('company')
                            ->label('Nama Perusahaan/Proyek')
                            ->placeholder('Contoh: PT. Maju Mundur')
                            ->required(),

                        DatePicker::make('start_date')
                            ->label('Tanggal Mulai Kerja')
                            ->native(false)
                            ->displayFormat('d M Y')
                            ->required(),

                        DatePicker::make('end_date')
                            ->label('Tanggal Berakhir Kerja')
                            ->native(false)
                            ->displayFormat('d M Y')
                            ->helperText('Kosongkan jika Anda masih aktif bekerja di perusahaan ini.')
                            ->nullable(),

                        RichEditor::make('description')
                            ->label('paragraf singkat tentang tanggung jawab')
                            ->placeholder('Jelaskan kontribusi Anda, proyek yang Anda selesaikan, dan tanggung jawab harian Anda...')
                            ->columnSpanFull()
                            ->required(),

                        TagsInput::make('achievements')
                            ->label('Pencepaian')
                            ->placeholder('Ketik teknologi lalu tekan enter list/array bullet point')
                            ->columnSpanFull()
                            ->required(),

                        TagsInput::make('techStack')
                            ->label('Teknologi yang Digunakan')
                            ->placeholder('Ketik teknologi lalu tekan enter (Contoh: React, Laravel, Docker)')
                            ->columnSpanFull()
                            ->required(),
                    ])->columnSpanFull(),
            ]);
    }
}
