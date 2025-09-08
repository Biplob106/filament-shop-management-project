<?php

namespace App\Filament\Resources\Registers\Pages;

use App\Filament\Resources\Registers\RegisterResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRegister extends ViewRecord
{
    protected static string $resource = RegisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
