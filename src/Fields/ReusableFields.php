<?php

namespace EdrisaTuray\FilamentUtilities\Fields;

use Filament\Forms\Components\TextInput;

/**
 * Class ReusableFields
 *
 * Provides commonly used Filament form fields.
 */
class ReusableFields
{
    /**
     * Get a standardized name field.
     */
    public static function name(): TextInput
    {
        return TextInput::make('name')
            ->required()
            ->maxLength(255);
    }

    /**
     * Get a standardized email field.
     */
    public static function email(): TextInput
    {
        return TextInput::make('email')
            ->email()
            ->required()
            ->maxLength(255);
    }
}
