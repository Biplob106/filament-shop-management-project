<?php

namespace App\Filament\Resources\OrderDetails\Pages;

use App\Filament\Resources\OrderDetails\OrderDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrderDetails extends ListRecords
{
    protected static string $resource = OrderDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
