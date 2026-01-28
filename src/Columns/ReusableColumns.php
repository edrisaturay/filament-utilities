<?php

namespace EdrisaTuray\FilamentUtilities\Columns;

use A909M\FilamentStateFusion\Tables\Columns\StateFusionSelectColumn;
use Filament\Tables\Columns\TextColumn;
use Tapp\FilamentProgressBarColumn\Columns\ProgressBarColumn;

/**
 * Class ReusableColumns
 *
 * Provides commonly used Filament table columns.
 */
class ReusableColumns
{
    /**
     * Get a standardized created_at column.
     */
    public static function createdAt(): TextColumn
    {
        return TextColumn::make('created_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);
    }

    /**
     * Get a standardized updated_at column.
     */
    public static function updatedAt(): TextColumn
    {
        return TextColumn::make('updated_at')
            ->dateTime()
            ->sortable()
            ->toggleable(isToggledHiddenByDefault: true);
    }

    /**
     * Get a standardized progress bar column.
     */
    public static function progressBar(string $name): ProgressBarColumn
    {
        return ProgressBarColumn::make($name);
    }

    /**
     * Get a standardized state column with quick transitions.
     */
    public static function stateSelect(string $name): StateFusionSelectColumn
    {
        return StateFusionSelectColumn::make($name);
    }

    /**
     * Get a standardized state badge using a text column.
     */
    public static function stateBadge(string $name): TextColumn
    {
        return TextColumn::make($name)->badge();
    }
}
