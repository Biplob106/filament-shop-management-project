<?php

namespace App\Filament\Resources\AdvanceSalaries\Pages;

use App\Filament\Resources\AdvanceSalaries\AdvanceSalaryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAdvanceSalary extends ViewRecord
{
    protected static string $resource = AdvanceSalaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
