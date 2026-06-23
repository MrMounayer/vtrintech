<?php

namespace App\Filament\Admin\Resources\Vitrines\Schemas;

use App\Filament\Admin\Resources\Users\UserResource;
use Filament\Forms\Components\{TextInput, Select, Textarea, Repeater};
use Filament\Schemas\Schema;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Models\Vitrine;

class VitrineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('email')
                            ->email(),
                        TextInput::make('password')
                            ->password(),
                    ])
                    ->createOptionAction(function ($action) {
                    return $action
                        ->modalHeading('Create New Customer')
                        ->modalButton('Create & Select')
                        ->modalWidth('lg');
                    })
                    ->required(),
                TextInput::make('domain')
                ->label('Domain')
                 ->prefix('https://')
                ->suffix('.vtrinetech.com')
                ->unique(ignoreRecord:true)
                ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('description'),
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
                // Textarea::make('settings')
                //     ->columnSpanFull(),
                TextInput::make('whatsapp')
                    ->required(),
                TextInput::make('cta')
                ->label('Call to Action'),
                TextInput::make('cta_description')
                ->label('Call to Action Description'),
                Select::make('language')
                        ->label('Language')
                        ->options(Vitrine::langOptions())
                        ->required(),
                    Select::make('theme')
                        ->label('Theme')
                        ->options(Vitrine::themeOptions())
                        ->required(),
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
                ->addActionLabel('Add Service')
                ,
                
            ]);
    }
}
