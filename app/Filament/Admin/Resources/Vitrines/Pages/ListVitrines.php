<?php

namespace App\Filament\Admin\Resources\Vitrines\Pages;

use App\Filament\Admin\Resources\Vitrines\VitrineResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVitrines extends ListRecords
{
    protected static string $resource = VitrineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
