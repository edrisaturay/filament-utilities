<?php

namespace EdrisaTuray\FilamentUtilities\Filters;

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
}
