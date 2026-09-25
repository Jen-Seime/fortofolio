<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
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
                    ->description('Kelola riwayat pendidikan formal, gelar, institusi, dan tahun studi Anda.')
                    ->columns(2)
                    ->schema([
                        TextInput::make('institution')
                            ->label('Nama Institusi / Universitas')
                            ->placeholder('Contoh: Universitas Indonesia, ITB')
                            ->required(),

                        TextInput::make('major')
                            ->label('Jurusan / Program Studi')
                            ->placeholder('Contoh: Teknik Informatika, Sistem Informasi')
                            ->required(),

                        TextInput::make('degree')
                            ->label('Gelar Akademik')
                            ->placeholder('Contoh: Sarjana Komputer (S.Kom)')
                            ->required(),

                        TextInput::make('start_year')
                            ->label('Tahun Mulai')
                            ->numeric()
                            ->minLength(4)
                            ->maxLength(4)
                            ->placeholder('Contoh: 2020')
                            ->required(),

                        TextInput::make('end_year')
                            ->label('Tahun Lulus / Berakhir')
                            ->numeric()
                            ->minLength(4)
                            ->maxLength(4)
                            ->placeholder('Contoh: 2024')
                            ->helperText('Kosongkan jika Anda masih menempuh studi di institusi ini.')
                            ->nullable(),

                        Textarea::make('description')
                            ->label('Deskripsi Pendidikan / Catatan Tambahan')
                            ->placeholder('Tuliskan pencapaian, organisasi, IPK, atau fokus studi Anda di sini...')
                            ->rows(4)
                            ->columnSpanFull()
                            ->nullable(),

                        TagsInput::make('coursework')
                            ->label('Materi/ilmu kuliah')
                            ->placeholder('contoh : alogoritma')
                            ->columnSpanFull()
                            ->required(),

                        TextInput::make('gpa')
                            ->label('IPK')
                            ->numeric()
                            ->placeholder('Contoh: 4.0')
                            ->nullable(),

                    ])->columnSpanFull(),
            ]);
    }
}
