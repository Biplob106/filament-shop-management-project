<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EmployeeForm
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
                DatePicker::make('date_of_birth')
                    ->required(),
                TextInput::make('nid_bc')
                    ->required(),
                TextInput::make('joining_date')
                    ->required(),
                TextInput::make('salary')
                    ->required()
                    ->numeric(),
                TextInput::make('night_salary')
                    ->required()
                    ->numeric(),
                TextInput::make('frequency')
                    ->required(),
            ]);
    }
}
