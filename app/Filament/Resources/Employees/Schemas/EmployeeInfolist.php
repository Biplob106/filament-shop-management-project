<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EmployeeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('phone'),
                TextEntry::make('address'),
                TextEntry::make('date_of_birth')
                    ->date(),
                TextEntry::make('nid_bc'),
                TextEntry::make('joining_date'),
                TextEntry::make('salary')
                    ->numeric(),
                TextEntry::make('night_salary')
                    ->numeric(),
                TextEntry::make('frequency'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
