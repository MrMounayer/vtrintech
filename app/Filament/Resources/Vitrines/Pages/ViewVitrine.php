<?php

namespace App\Filament\Resources\Vitrines\Pages;

use App\Filament\Resources\Vitrines\VitrineResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVitrine extends ViewRecord
{
    protected static string $resource = VitrineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
