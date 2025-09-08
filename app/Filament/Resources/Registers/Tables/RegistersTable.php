<?php

namespace App\Filament\Resources\Registers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RegistersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hand_cash')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_sale')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_advance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_salary')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_expense')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('is_open')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
