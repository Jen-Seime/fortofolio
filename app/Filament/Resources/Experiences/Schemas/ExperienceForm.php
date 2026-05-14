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
                Section::make('Detail Pengalaman Kerja')
                    ->columns(2)
                    ->schema([
                        TextInput::make('company_name')
                            ->label('Nama Perusahaan')
                            ->placeholder('Contoh: Google, Meta, dll.')
                            ->required(),

                        TextInput::make('position')
                            ->label('Posisi / Jabatan')
                            ->placeholder('Contoh: Senior Fullstack Developer')
                            ->required(),

                        DatePicker::make('start_date')
                            ->label('Tanggal Mulai')
                            ->native(false)
                            ->displayFormat('d M Y')
                            ->required(),

                        DatePicker::make('end_date')
                            ->label('Tanggal Berakhir')
                            ->native(false)
                            ->displayFormat('d M Y')
                            ->helperText('Kosongkan jika masih bekerja di sini')
                            ->nullable(),

                        RichEditor::make('description')
                            ->label('Deskripsi Pekerjaan')

                            ->columnSpanFull()
                            ->required(),

                        TagsInput::make('technology')
                            ->label('Teknologi yang Digunakan')
                            ->placeholder('Tambah teknologi...')
                            ->columnSpanFull()
                            ->required(),
                    ])->columnSpanFull(),
            ]);
    }
}
