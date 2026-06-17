<?php

namespace App\Filament\Resources\Vitrines\Pages;

use App\Filament\Resources\Vitrines\VitrineResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVitrines extends ListRecords
{
    protected static string $resource = VitrineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->visible(fn () => 
            auth()->user()->vitrines()->count() < 1
            ),
        ];
    }
}
