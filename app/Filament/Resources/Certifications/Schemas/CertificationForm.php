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

                Section::make('')
                    ->columns(2)
                    ->schema([
                        Group::make()
                            ->relationship('issuerLogo')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('Issuer Logo')
                                    ->directory('Issuer-Logo')
                                    ->disk('public')
                                    ->visibility('public')
                                    ->image()
                                    ->required(),

                                Hidden::make('type')
                                    ->default('logo'),
                            ]),

                        Group::make()
                            ->relationship('pdfFile')
                            ->schema([
                                FileUpload::make('url')
                                    ->label('File Pdf')
                                    ->directory('File-Pdf')
                                    ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                                    ->maxSize(5120) // 5MB
                                    ->disk('public')
                                    ->getUploadedFileNameForStorageUsing(function ($file) {
                                        return time().'_'.$file->getClientOriginalName();
                                    })
                                    ->required(),

                                Hidden::make('type')
                                    ->default('pdf'),
                            ]),

                    ])->columnSpanFull(),

                Section::make('Certification Detail')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required(),

                        TextInput::make('slug')
                            ->label('slug')
                            ->required(),

                        TextInput::make('issuer')
                            ->label('Penerbit')
                            ->required(),

                        DatePicker::make('issue_date')
                            ->label('Issue Date')
                            ->required(),

                        TextInput::make('verification_url')
                            ->label('Verification Url')
                            ->required(),

                        TextInput::make('credential_id')
                            ->label('Credential Id')
                            ->required(),

                        TagsInput::make('skills_covered')
                            ->label('Skills Covered')
                            ->placeholder('Tambah teknologi...')
                            ->columnSpanFull()
                            ->required(),

                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                            ->label('Description')
                            ->required(),

                    ])->columnSpanFull(),
            ]);

    }
}
