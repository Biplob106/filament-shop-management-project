<?php

namespace App\Filament\Resources\Registers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RegisterInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('hand_cash')
                    ->numeric(),
                TextEntry::make('total_sale')
                    ->numeric(),
                TextEntry::make('total_advance')
                    ->numeric(),
                TextEntry::make('total_salary')
                    ->numeric(),
                TextEntry::make('total_expense')
                    ->numeric(),
                TextEntry::make('is_open')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
