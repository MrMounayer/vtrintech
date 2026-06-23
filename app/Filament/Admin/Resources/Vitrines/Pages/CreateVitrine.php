<?php

namespace App\Filament\Admin\Resources\Vitrines\Pages;

use App\Filament\Admin\Resources\Vitrines\VitrineResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVitrine extends CreateRecord
{
    protected static string $resource = VitrineResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data) : array
    {
        dd($data);
        return $data;
    }
}
