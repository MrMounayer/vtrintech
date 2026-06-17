<?php

namespace App\Filament\Resources\Vitrines\Schemas;

use App\Models\Vitrine;
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
                TextInput::make('domain')
                ->label('Domain')
                 ->prefix('https://')
                ->suffix('.vtrinetech.com')
                ->required(),
                TextInput::make('name')
                    ->required(),
                    Textarea::make('description')
                        ->ColumnSpanFull(),
                    Select::make('theme')
                        ->label('Theme')
                        ->options(Vitrine::themeOptions())
                        ->required(),
                    Select::make('style')
                        ->label('Style')
                        ->options(Vitrine::styleOptions())
                        ->required(),
                Repeater::make('links')
                ->label('Social Links')
                    ->schema([
                        Select::make('label')
                        ->options([
                            'GitHub' => 'GitHub',
                            'Twitter' => 'Twitter',
                            'Facebook' => 'Facebook',
                            'Instagram' => 'Instagram',
                            'Website' => 'Website',
                            'TikTok' => 'TikTok',
                            'YouTube' => 'YouTube',
                            'Snapchat' => 'Snapchat',
                            'Telegram' => 'Telegram',
                            'Gmail' => 'Gmail',
                        ])
                            ->required(),
                        TextInput::make('url')
                            ->required()
                            ->url(),
                    ])
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('logo')
                    ->collection('logo')
                    ->required()
                    ->columnSpanFull(),
                SpatieMediaLibraryFileUpload::make('carousel')
                    ->multiple()
                    ->reorderable()
                    ->columnSpanFull()
                    ->collection('carousel'),
                Repeater::make('services')
                ->schema([
                    Select::make('icon')
                        ->label('Icon')
                        ->options([
                           '🎨' => '🎨',
                            '💻' => '💻',
                            '📱' => '📱',
                            '⚙️' => '⚙️',
                            '🔒' => '🔒',
                            '📊' => '📊',
                            '🚀' => '🚀',
                            '❤️' => '❤️',
                            '⭐' => '⭐',
                            '✓' => '✓',
                            '💡' => '💡',
                            '🔧' => '🔧',
                            '📁' => '📁',
                            '🌐' => '🌐',
                            '📧' => '📧',
                            '📞' => '📞',
                            '👤' => '👤',
                            '👥' => '👥',
                            '💬' => '💬',
                            '🔔' => '🔔',
                            '📷' => '📷',
                            '🎬' => '🎬',
                            '🎵' => '🎵',
                            '📚' => '📚',
                            '🏆' => '🏆',
                            '💰' => '💰',
                            '📈' => '📈',
                            '🔥' => '🔥',
                            '🆕' => '🆕',
                            '⏰' => '⏰',
                            '📅' => '📅',
                            '📍' => '📍',
                            '🛒' => '🛒',
                            '🎁' => '🎁',
                            '🔗' => '🔗',
                            '📤' => '📤',
                            '📥' => '📥',
                            '🗑️' => '🗑️',
                            '✏️' => '✏️',
                            '👁' => '👁',
                            '🚫' => '🚫',
                            '❓' => '❓',
                            'ℹ️' => 'ℹ️',
                            '⬇️' => '⬇️',
                            '⬆️' => '⬆️',
                            '◀' => '◀',
                            '▶' => '▶',
                            '▲' => '▲',
                            '▼' => '▼',
                            '🎯' => '🎯',
                            '📐' => '📐',
                            '📏' => '📏',
                            '✂️' => '✂️',
                            '🖇️' => '🖇️',
                            '📋' => '📋',
                            '🖊️' => '🖊️',
                            '🖋️' => '🖋️',
                            '✒️' => '✒️',
                            '📝' => '📝',
                            '📌' => '📌',
                            '📎' => '📎',
                            '🔖' => '🔖',
                            '🏷️' => '🏷️',
                            '🎪' => '🎪',
                            '🎭' => '🎭',
                            '🖼️' => '🖼️',
                            '🎚️' => '🎚️',
                            '🎛️' => '🎛️',
                            '🎧' => '🎧',
                            '🎤' => '🎤',
                            '🎹' => '🎹',
                            '🎸' => '🎸',
                            '🎻' => '🎻',
                            '🥁' => '🥁',
                            '📢' => '📢',
                            '📣' => '📣',
                            '📯' => '📯',
                            '🎮' => '🎮',
                            '🎲' => '🎲',
                            '🎳' => '🎳',
                            '🎰' => '🎰',
                            '🃏' => '🃏',
                            '🎴' => '🎴',
                            '🏅' => '🏅',
                            '🥇' => '🥇',
                            '🥈' => '🥈',
                            '🥉' => '🥉',
                            '⚽' => '⚽',
                            '🏀' => '🏀',
                            '🏈' => '🏈',
                            '⚾' => '⚾',
                            '🎾' => '🎾',
                            '🏐' => '🏐',
                            '🏉' => '🏉',
                            '🎱' => '🎱',
                            '🪃' => '🪃',
                            '🏹' => '🏹',
                            '🛡️' => '🛡️',
                            '🔪' => '🔪',
                            '💣' => '💣',
                            '⛈️' => '⛈️',
                            '❄️' => '❄️',
                            '🎄' => '🎄',
                            '🎆' => '🎆',
                            '🎇' => '🎇',
                            '✨' => '✨',
                            '💥' => '💥',
                        ])
                        ->required()
                        ->searchable()
                        ->allowHtml(),
                    
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    
                    TextInput::make('description')
                        ->label('Description')
                        ->required(),
                ])
                ->columns(1)
                ->addActionLabel('Add Service')
                ->minItems(1)
                ,
                TextInput::make('whatsapp')
                    ->placeholder("+213556223344")
                    ->required(),
                
            ]);
    }
}
