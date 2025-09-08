<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('size')
                    ->required(),
                TextInput::make('color')
                    ->required(),
                TextInput::make('price')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('material')
                    ->required(),
            ]);
    }
}
