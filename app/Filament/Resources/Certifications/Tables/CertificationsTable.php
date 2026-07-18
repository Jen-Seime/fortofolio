<?php

namespace App\Filament\Resources\Certifications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CertificationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('issuerLogo.url')
                    ->label('Logo')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('title')
                    ->label('Nama Sertifikasi')
                    ->description(fn ($record) => $record->slug)
                    ->searchable()
                    ->sortable(),

                TextColumn::make('issuer')
                    ->label('Penerbit')
                    ->badge()
                    ->color('info')
                    ->sortable(),

                TextColumn::make('issue_date')
                    ->label('Tanggal Terbit')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('credential_id')
                    ->label('ID Kredensial')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
