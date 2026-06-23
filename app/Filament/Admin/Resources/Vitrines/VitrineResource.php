<?php

namespace App\Filament\Admin\Resources\Vitrines;

use App\Filament\Admin\Resources\Vitrines\Pages\CreateVitrine;
use App\Filament\Admin\Resources\Vitrines\Pages\EditVitrine;
use App\Filament\Admin\Resources\Vitrines\Pages\ListVitrines;
use App\Filament\Admin\Resources\Vitrines\Pages\ViewVitrine;
use App\Filament\Admin\Resources\Vitrines\Schemas\VitrineForm;
use App\Filament\Admin\Resources\Vitrines\Schemas\VitrineInfolist;
use App\Filament\Admin\Resources\Vitrines\Tables\VitrinesTable;
use App\Models\Vitrine;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VitrineResource extends Resource
{
    protected static ?string $model = Vitrine::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return VitrineForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VitrineInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VitrinesTable::configure($table);
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
            'index' => ListVitrines::route('/'),
            'create' => CreateVitrine::route('/create'),
            'view' => ViewVitrine::route('/{record}'),
            'edit' => EditVitrine::route('/{record}/edit'),
        ];
    }
}
