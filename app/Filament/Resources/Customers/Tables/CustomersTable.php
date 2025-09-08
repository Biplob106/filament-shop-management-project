<?php

namespace App\Filament\Resources\Customers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;

class CustomersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->icon(Heroicon::User)
                    ->searchable(),
                TextColumn::make('email')->icon(Heroicon::Envelope)
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('phone')->icon(Heroicon::Phone)
                    ->searchable(),
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('total_amount')->color('primary')->icon(Heroicon::CurrencyBangladeshi)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('paid_amount')->icon(Heroicon::CurrencyBangladeshi)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('due_amount')->icon(Heroicon::CurrencyBangladeshi)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('discount_amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')->color('primary')
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
