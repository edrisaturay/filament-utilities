<?php

namespace EdrisaTuray\FilamentUtilities\Filters;

use A909M\FilamentStateFusion\Tables\Filters\StateFusionSelectFilter;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter;

/**
 * Class ReusableFilters
 *
 * Provides commonly used Filament table filters.
 */
class ReusableFilters
{
    /**
     * Get a standardized date range filter.
     */
    public static function dateRange(string $name = 'created_at'): DateRangeFilter
    {
        return DateRangeFilter::make($name);
    }

    /**
     * Get a standardized state filter.
     */
    public static function state(string $name = 'status'): StateFusionSelectFilter
    {
        return StateFusionSelectFilter::make($name);
    }
}
