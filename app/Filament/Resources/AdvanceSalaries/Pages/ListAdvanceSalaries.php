<?php

namespace App\Filament\Resources\AdvanceSalaries\Pages;

use App\Filament\Resources\AdvanceSalaries\AdvanceSalaryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdvanceSalaries extends ListRecords
{
    protected static string $resource = AdvanceSalaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
