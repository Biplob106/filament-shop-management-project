<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('invoice_number')
                    ->required(),
                TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                TextInput::make('sub_total')
                    ->required()
                    ->numeric(),
                TextInput::make('grand_total')
                    ->required()
                    ->numeric(),
                TextInput::make('status')
                    ->required(),
                TextInput::make('payment_status')
                    ->required(),
                TextInput::make('discount')
                    ->required(),
                DateTimePicker::make('delivery_date'),
                Textarea::make('remarks')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
