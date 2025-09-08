<?php

namespace App\Filament\Resources\OrderDetails\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OrderDetailInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('order_id')
                    ->numeric(),
                TextEntry::make('product_id')
                    ->numeric(),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('discount')
                    ->numeric(),
                TextEntry::make('color'),
                TextEntry::make('size'),
                TextEntry::make('material'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
