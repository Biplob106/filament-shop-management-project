<?php

namespace App\Filament\Resources\Attendances\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('employee_id')
                    ->required()
                    ->numeric(),
                TextInput::make('is_present')
                    ->required()
                    ->numeric(),
                TextInput::make('is_night')
                    ->required()
                    ->numeric(),
                TextInput::make('is_paid')
                    ->required()
                    ->numeric(),
            ]);
    }
}
