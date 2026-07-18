<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image.url')
                    ->label('Cover')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('title')
                    ->label('Judul Project')
                    ->description(fn ($record) => $record->slug)
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category_role.name')
                    ->label('Kategori')
                    ->badge()
                    ->color('info')
                    ->sortable(),

                TextColumn::make('technology')
                    ->label('Teknologi')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('date')
                    ->label('Tanggal Rilis')
                    ->date('d M Y')
                    ->sortable(),

                ToggleColumn::make('is_featured')
                    ->label('Project Pilihan')
                    ->onColor('success')
                    ->offColor('danger'),
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
