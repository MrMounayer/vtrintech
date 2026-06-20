<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('client_id')
                    ->label("Client")
                    ->required()
                    ->options(auth()->user()->clients()->pluck('name', 'id')),
                TextInput::make('description')
                    ->required(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                
            ]);
    }
}
