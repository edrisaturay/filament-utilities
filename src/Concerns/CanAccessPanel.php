<?php

namespace EdrisaTuray\FilamentUtilities\Concerns;

use Filament\Panel;

/**
 * Trait CanAccessPanel
 *
 * Provides a contract for models that need to implement Filament panel access logic.
 */
trait CanAccessPanel
{
    /**
     * Determine if the user can access the given Filament panel.
     */
    abstract public function canAccessPanel(Panel $panel): bool;
}
