<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $bdEmployee = Country::where('country_code', 'BD')->withCount('employees')->first();
        $ukEmployee = Country::where('country_code', 'UK')->withCount('employees')->first();
        // $usEmployee = Country::where('country_code', 'US')->withCount('employees')->first();
        return [
            Stat::make('Total Employees', Employee::all()->count()),
            Stat::make($bdEmployee->name .' Employees', $bdEmployee->employees_count),
            Stat::make($ukEmployee->name .' Employees', $ukEmployee->employees_count),
            // Stat::make($usEmployee->name .' Employees', $usEmployee->employees_count),
        ];
    }
}
