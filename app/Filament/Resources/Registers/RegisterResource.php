<?php

namespace App\Filament\Resources\Registers;

use App\Filament\Resources\Registers\Pages\CreateRegister;
use App\Filament\Resources\Registers\Pages\EditRegister;
use App\Filament\Resources\Registers\Pages\ListRegisters;
use App\Filament\Resources\Registers\Pages\ViewRegister;
use App\Filament\Resources\Registers\Schemas\RegisterForm;
use App\Filament\Resources\Registers\Schemas\RegisterInfolist;
use App\Filament\Resources\Registers\Tables\RegistersTable;
use App\Models\Register;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RegisterResource extends Resource
{
    protected static ?string $model = Register::class;

    protected static string|BackedEnum|null $navigationIcon ='heroicon-o-clipboard-document';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Schema $schema): Schema
    {
        return RegisterForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RegisterInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RegistersTable::configure($table);
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
            'index' => ListRegisters::route('/'),
            'create' => CreateRegister::route('/create'),
            'view' => ViewRegister::route('/{record}'),
            'edit' => EditRegister::route('/{record}/edit'),
        ];
    }
}
