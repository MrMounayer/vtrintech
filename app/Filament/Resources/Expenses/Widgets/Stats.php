<?php

namespace App\Filament\Resources\Expenses\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Stats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
                Stat::make('total')
                    ->label('Total Expenses')
                    ->value(1234) // Replace with actual logic to calculate total expenses
                    ->color('danger'),
                Stat::make('average')
                    ->label('Average Expense')
                    ->value(123) // Replace with actual logic to calculate average expense
                    ->color('warning'),
                Stat::make('highest')
                    ->label('Highest Expense')
                    ->value(456) // Replace with actual logic to calculate highest expense
                    ->color('success'),
        ];
    }
}
