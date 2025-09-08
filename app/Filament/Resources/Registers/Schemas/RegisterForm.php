<?php

namespace App\Filament\Resources\Registers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RegisterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('hand_cash')
                    ->required()
                    ->numeric(),
                TextInput::make('total_sale')
                    ->required()
                    ->numeric(),
                TextInput::make('total_advance')
                    ->required()
                    ->numeric(),
                TextInput::make('total_salary')
                    ->required()
                    ->numeric(),
                TextInput::make('total_expense')
                    ->required()
                    ->numeric(),
                TextInput::make('is_open')
                    ->required()
                    ->numeric(),
            ]);
    }
}
