<?php

namespace App\Filament\Resources\OrderDetails\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_id')
                    ->required()
                    ->numeric(),
                TextInput::make('product_id')
                    ->required()
                    ->numeric(),
                Textarea::make('remarks')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('discount')
                    ->required()
                    ->numeric(),
                TextInput::make('color')
                    ->required(),
                TextInput::make('size')
                    ->required(),
                TextInput::make('material')
                    ->required(),
            ]);
    }
}
