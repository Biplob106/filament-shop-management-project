<?php

namespace App\Filament\Resources\Salaries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SalaryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('employee_id')
                    ->numeric(),
                TextEntry::make('present_days')
                    ->numeric(),
                TextEntry::make('sub_total')
                    ->numeric(),
                TextEntry::make('grand_total')
                    ->numeric(),
                TextEntry::make('adjustment')
                    ->numeric(),
                TextEntry::make('advance_salary_id')
                    ->numeric(),
                TextEntry::make('paid')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
