<?php

namespace EdrisaTuray\FilamentUtilities;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * Class FilamentUtilitiesServiceProvider
 *
 * Service provider for the Filament Utilities package.
 */
class FilamentUtilitiesServiceProvider extends PackageServiceProvider
{
    /**
     * Configure the package.
     */
    public function configurePackage(Package $package): void
    {
        $package->name('filament-utilities');

        $viewsPath = __DIR__.'/../resources/views';

        if (is_dir($viewsPath)) {
            $package->hasViews();
        }

        $package->hasTranslations();
    }

    /**
     * Handle package registration.
     */
    public function packageRegistered(): void
    {
        //
    }

    /**
     * Handle package booting.
     */
    public function packageBooted(): void
    {
        //
    }
}
