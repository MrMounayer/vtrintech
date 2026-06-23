<?php

namespace App\Filament\Admin\Resources\Vitrines\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VitrineInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextEntry::make('created_at')
                //     ->dateTime()
                //     ->placeholder('-'),
                // TextEntry::make('updated_at')
                //     ->dateTime()
                //     ->placeholder('-'),
                // TextEntry::make('domain'),
                // TextEntry::make('name'),
                // TextEntry::make('description')
                //     ->placeholder('-'),
                // TextEntry::make('links')
                //     ->placeholder('-')
                //     ->columnSpanFull(),
                // TextEntry::make('logo')
                //     ->placeholder('-'),
                // TextEntry::make('services')
                //     ->placeholder('-')
                //     ->columnSpanFull(),
                // TextEntry::make('settings')
                //     ->placeholder('-')
                //     ->columnSpanFull(),
                // TextEntry::make('whatsapp'),
                // TextEntry::make('cta')
                //     ->placeholder('-'),
                // TextEntry::make('cta_description')
                //     ->placeholder('-'),
                // TextEntry::make('user_id')
                //     ->numeric(),
                // TextEntry::make('language'),
                // TextEntry::make('theme'),
            ]);
    }
}
