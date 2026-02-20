<?php

namespace App\Filament\Resources\Vitrines\Pages;

use App\Filament\Resources\Vitrines\VitrineResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVitrine extends CreateRecord
{
    protected static string $resource = VitrineResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['user_id'] = auth()->id();

    return $data;
}
}
