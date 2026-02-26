<?php

namespace SpyApp\ThemeAberdeen;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentColor;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Support\HtmlString;

class ThemeAberdeenPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function getId(): string
    {
        return 'spyapp-theme-aberdeen';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        FilamentColor::register([
            'primary' => Color::Red,
            'danger' => Color::Rose,
            'gray' => Color::Gray,
            'info' => Color::Indigo,
            'success' => Color::Green,
            'warning' => Color::Yellow,
        ]);
    }
}
