<?php

namespace App\Filament\Resources\Experiences\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExperiencesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('position')
                    ->label('Posisi / Jabatan')
                    ->searchable()
                    ->sortable()
                    ->description(fn ($record) => $record->company_name),

                TextColumn::make('start_date')
                    ->label('Mulai Kerja')
                    ->date('M Y')
                    ->sortable(),

                TextColumn::make('end_date')
                    ->label('Selesai Kerja')
                    ->date('M Y')
                    ->default('Sekarang (Aktif)')
                    ->badge()
                    ->color(fn ($state) => $state === null ? 'success' : 'gray')
                    ->sortable(),

                TextColumn::make('technology')
                    ->label('Teknologi')
                    ->badge()
                    ->color('gray'),
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
