<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('total_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('paid_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('due_amount')
                    ->required()
                    ->numeric(),
                TextInput::make('discount_amount')
                    ->required()
                    ->numeric(),
            ]);
    }
}
