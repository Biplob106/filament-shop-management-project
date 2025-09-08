<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class OrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('invoice_number'),
                TextEntry::make('customer_id')
                    ->numeric(),
                TextEntry::make('sub_total')
                    ->numeric(),
                TextEntry::make('grand_total')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('payment_status'),
                TextEntry::make('discount'),
                TextEntry::make('delivery_date')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
