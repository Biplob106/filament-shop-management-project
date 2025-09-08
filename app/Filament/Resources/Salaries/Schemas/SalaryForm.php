<?php

namespace App\Filament\Resources\Salaries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SalaryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('employee_id')
                    ->required()
                    ->numeric(),
                TextInput::make('present_days')
                    ->required()
                    ->numeric(),
                TextInput::make('sub_total')
                    ->required()
                    ->numeric(),
                TextInput::make('grand_total')
                    ->required()
                    ->numeric(),
                TextInput::make('adjustment')
                    ->required()
                    ->numeric(),
                TextInput::make('advance_salary_id')
                    ->required()
                    ->numeric(),
                TextInput::make('paid')
                    ->required()
                    ->numeric(),
            ]);
    }
}
