<?php

namespace App\Filament\Resources\AdvanceSalaries;

use App\Filament\Resources\AdvanceSalaries\Pages\CreateAdvanceSalary;
use App\Filament\Resources\AdvanceSalaries\Pages\EditAdvanceSalary;
use App\Filament\Resources\AdvanceSalaries\Pages\ListAdvanceSalaries;
use App\Filament\Resources\AdvanceSalaries\Pages\ViewAdvanceSalary;
use App\Filament\Resources\AdvanceSalaries\Schemas\AdvanceSalaryForm;
use App\Filament\Resources\AdvanceSalaries\Schemas\AdvanceSalaryInfolist;
use App\Filament\Resources\AdvanceSalaries\Tables\AdvanceSalariesTable;
use App\Models\AdvanceSalary;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
class AdvanceSalaryResource extends Resource
{
    protected static ?string $model = AdvanceSalary::class;

protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return AdvanceSalaryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AdvanceSalaryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdvanceSalariesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdvanceSalaries::route('/'),
            'create' => CreateAdvanceSalary::route('/create'),
            'view' => ViewAdvanceSalary::route('/{record}'),
            'edit' => EditAdvanceSalary::route('/{record}/edit'),
        ];
    }
}
