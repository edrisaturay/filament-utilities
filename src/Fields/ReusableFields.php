<?php

namespace EdrisaTuray\FilamentUtilities\Fields;

use A909M\FilamentStateFusion\Forms\Components\StateFusionRadio;
use A909M\FilamentStateFusion\Forms\Components\StateFusionSelect;
use A909M\FilamentStateFusion\Forms\Components\StateFusionToggleButtons;
use Cheesegrits\FilamentPhoneNumbers\Forms\Components\PhoneNumber;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

/**
 * Class ReusableFields
 *
 * Provides commonly used Filament form fields.
 */
class ReusableFields
{
    /**
     * Get a standardized relationship select field with quick add.
     */
    public static function relationshipSelect(
        string $name,
        string $relationship,
        string $titleAttribute,
        ?string $label = null,
        bool|\Closure $quickAddEnabled = true,
        string|\Closure|null $quickAddLabel = null
    ): Select {
        return Select::make($name)
            ->relationship($relationship, $titleAttribute)
            ->searchable()
            ->preload()
            ->quickAdd(
                enabled: $quickAddEnabled,
                label: $quickAddLabel
            )
            ->label($label);
    }

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

    /**
     * Get a standardized phone number field.
     */
    public static function phone(string $name = 'phone'): PhoneNumber
    {
        return PhoneNumber::make($name);
    }

    /**
     * Get a standardized state select field.
     */
    public static function stateSelect(string $name): StateFusionSelect
    {
        return StateFusionSelect::make($name);
    }

    /**
     * Get a standardized state radio field with descriptions.
     */
    public static function stateRadio(string $name): StateFusionRadio
    {
        return StateFusionRadio::make($name);
    }

    /**
     * Get a standardized state toggle buttons field with icons and colors.
     */
    public static function stateToggleButtons(string $name): StateFusionToggleButtons
    {
        return StateFusionToggleButtons::make($name);
    }
}
