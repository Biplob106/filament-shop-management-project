<?php

namespace App\Filament\Resources\AdvanceSalaries\Pages;

use App\Filament\Resources\AdvanceSalaries\AdvanceSalaryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAdvanceSalary extends EditRecord
{
    protected static string $resource = AdvanceSalaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
