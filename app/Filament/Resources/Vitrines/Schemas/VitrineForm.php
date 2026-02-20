<?php

namespace App\Filament\Resources\Vitrines\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class VitrineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                    TextInput::make('slug')
                    ->label('Domain')
                    ->required(),
                    Textarea::make('description')
                    ->ColumnSpanFull(),
                Repeater::make('links')
                    ->schema([
                        Select::make('label')
                        ->options([
                            'GitHub' => 'GitHub',
                            'Twitter' => 'Twitter',
                            'LinkedIn' => 'LinkedIn',
                            'Facebook' => 'Facebook',
                            'Instagram' => 'Instagram',
                            'Website' => 'Website',
                            'TikTok' => 'TikTok',
                            'YouTube' => 'YouTube',
                            'Snapchat' => 'Snapchat',
                        ])
                            ->required(),
                        TextInput::make('url')
                            ->required()
                            ->url(),
                    ])
                    ->columnSpanFull(),
                Select::make('settings')
                    ->label('Theme')
                    ->options(["light" => "Light", "dark" => "Dark", "system" => "System"])
                    ->required()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('hero')
                    ->collection('hero')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('background')
                    ->collection('background'),
                SpatieMediaLibraryFileUpload::make('carousel')
                    ->multiple()
                    ->reorderable()
                    ->columnSpanFull()
                    ->collection('carousel'),
                
            ]);
    }
}
