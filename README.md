![Screenshot](/arts/ti.png)

<p align="center">
   <a href="https://packagist.org/packages/spykapps/theme-aberdeen">
    <img src="https://img.shields.io/packagist/v/spykapps/theme-aberdeen.svg?style=for-the-badge" alt="Packagist Version">
   </a>
   <a href="https://packagist.org/packages/spykapps/theme-aberdeen">
    <img src="https://img.shields.io/packagist/dt/spykapps/theme-aberdeen.svg?style=for-the-badge" alt="Total Downloads">
   </a>
   <a href="https://laravel.com/docs/12.x"><img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel 12"></a>
   <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php" alt="PHP 8.3"></a>
   <a href="https://github.com/spykapps/theme-aberdeen/blob/main/LICENSE.md">
     <img src="https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge" alt="License">
   </a>
</p>


# Aberdeen - A Premium Filament Theme by Spykapps

A refined, minimal Filament theme with tight spacing, subtle shadows, and Brand New Filament warm-amber accents. Designed for Filament v4 and v5.

---

## Screenshots

| | |
|---|---|
| ![Dashboard](arts/screenshot-1.png) | ![Table View](arts/screenshot-2.png) |
| ![Form View](arts/screenshot-3.png) | ![Dark Mode](arts/screenshot-4.png) |
| ![Sidebar Active](arts/screenshot-5.png) | ![Modal View](arts/screenshot-6.png) |

## Installation

```bash
composer require spykapps/theme-aberdeen
```

Then run the install command:

```bash
php artisan aberdeen:install
```

The command will:

1. Detect your Filament panels (or ask you to choose one if multiple exist)
2. Create a theme CSS file if one doesn't exist yet
3. Add the aberdeen stylesheet import automatically

### Register the Plugin

Add the plugin to your panel provider:

```php
use SpyApp\ThemeAberdeen\ThemeAberdeenPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugin(ThemeAberdeenPlugin::make());
}
```

### Compile Assets

```bash
npm run build
```

## Features

- **Tight border-radius** — Clean 4px corners throughout
- **Refined shadows** — Subtle, layered box-shadows for light & dark modes
- **Filament warm-amber accents** — Primary buttons, active sidebar indicators, focus rings
- **Compact spacing** — Denser tables, sections, and form elements
- **Dark mode** — Full dark mode support with carefully tuned values
- **Smooth transitions** — 100ms/180ms transitions on interactive elements

## Credits

- [Sanchit Patil](https://github.com/sanchitspatil)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
