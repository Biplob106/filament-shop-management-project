<?php

namespace App\Filament\Resources\Images\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('url')
                    ->required(),
                TextInput::make('product_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
