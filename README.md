# Filament Utilities Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/edrisaturay/filament-utilities.svg?style=flat-square)](https://packagist.org/packages/edrisaturay/filament-utilities)
[![Total Downloads](https://img.shields.io/packagist/dt/edrisaturay/filament-utilities.svg?style=flat-square)](https://packagist.org/packages/edrisaturay/filament-utilities)
[![GitHub](https://img.shields.io/github/license/edrisaturay/filament-utilities.svg?style=flat-square)](https://github.com/edrisaturay/filament-utilities/blob/main/LICENSE.md)

A collection of reusable components, traits, and helper functions for Filament v5 applications. This package ensures UI consistency and reduces boilerplate across multiple panels.

## Features

### Reusable Fields (`Fields/ReusableFields.php`)
Standardized form fields with pre-configured validation and constraints:
- `ReusableFields::name()`: Standardized name input.
- `ReusableFields::email()`: Standardized email input with validation.

### Reusable Columns (`Columns/ReusableColumns.php`)
Standardized table columns for consistent data display:
- `ReusableColumns::createdAt()`: Standardized `created_at` column with date-time formatting and toggleable visibility.
- `ReusableColumns::updatedAt()`: Standardized `updated_at` column.

### Traits & Concerns
- **`CanAccessPanel`**: An abstract trait that enforces the implementation of `canAccessPanel(Panel $panel): bool` on models (typically the `User` model), facilitating standardized access control.

## Installation

Add the package to your `composer.json` (usually handled via the root project in this starter kit):

```bash
composer require edrisaturay/filament-utilities
```

The service provider is automatically registered via Laravel's package discovery.

## Usage Examples

### Using Reusable Fields in a Form

```php
use EdrisaTuray\FilamentUtilities\Fields\ReusableFields;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            ReusableFields::name(),
            ReusableFields::email(),
            // ...
        ]);
}
```

### Using Reusable Columns in a Table

```php
use EdrisaTuray\FilamentUtilities\Columns\ReusableColumns;

public static function table(Table $table): Table
{
    return $table
        ->columns([
            // ...
            ReusableColumns::createdAt(),
            ReusableColumns::updatedAt(),
        ]);
}
```

### Implementing Panel Access

```php
use EdrisaTuray\FilamentUtilities\Concerns\CanAccessPanel;

class User extends Authenticatable
{
    use CanAccessPanel;

    public function canAccessPanel(Panel $panel): bool
    {
        return true; // Your custom logic
    }
}
```

## License

The MIT License (MIT).
