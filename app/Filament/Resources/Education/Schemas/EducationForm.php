<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Pendidikan')
                    ->columns(2)
                    ->schema([
                        TextInput::make('institution')
                            ->label('Nama Institusi')
                            ->placeholder('Contoh: Universitas Indonesia')
                            ->required(),
                        TextInput::make('major')
                            ->label('Jurusan')
                            ->placeholder('Contoh: Teknik Informatika')
                            ->required(),
                        TextInput::make('degree')
                            ->label('Gelar')
                            ->placeholder('Contoh: Sarjana Teknik Informatika')
                            ->required(),
                        TextInput::make('start_year')
                            ->label('Tanggal Mulai')
                            ->numeric()
                            ->minLength(4)
                            ->maxLength(4)
                            ->placeholder('YYYY') // Explicit placeholder for year
                            ->required(),
                        TextInput::make('end_year')
                            ->label('Tahun Berakhir')
                            ->numeric()
                            ->minLength(4)
                            ->maxLength(4)
                            ->placeholder('YYYY')
                            ->helperText('Kosongkan jika masih belajar di sini')
                            ->nullable(),
                        TextInput::make('description')
                            ->label('Deskripsi Pendidikan')
                            ->columnSpanFull()
                            ->nullable(),
                    ])->columnSpanFull(),
            ]);
    }
}
