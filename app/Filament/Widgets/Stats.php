<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Stats extends StatsOverviewWidget
{


    protected function getStats(): array
    {
        return [
            Stat::make('Total Sales',fn () => auth()->user()->transactions()->count()." DZD")
                    ->color('danger'),
                Stat::make('Total Expenses',fn () => auth()->user()->expenses()->count()." DZD")
                    ->color('warning'),
                Stat::make('Net Profit',(auth()->user()->transactions()->count() - auth()->user()->expenses()->count())." DZD")
                    ->color('success'),
        ];
    }
}
