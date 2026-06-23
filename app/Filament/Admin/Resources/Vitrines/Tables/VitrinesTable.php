<?php

namespace App\Filament\Admin\Resources\Vitrines\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VitrinesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('domain')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('description')
                    ->searchable(),
                TextColumn::make('logo')
                    ->searchable(),
                TextColumn::make('whatsapp')
                    ->searchable(),
                TextColumn::make('cta')
                    ->searchable(),
                TextColumn::make('cta_description')
                    ->searchable(),
                TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('language')
                    ->searchable(),
                TextColumn::make('theme')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
