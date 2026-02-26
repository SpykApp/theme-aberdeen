<?php

namespace SpyApp\ThemeAberdeen;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SpyApp\ThemeAberdeen\Console\InstallCommand;

class ThemeAberdeenServiceProvider extends PackageServiceProvider
{
    public static string $name = 'theme-aberdeen';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasCommand(InstallCommand::class);
    }

    public function packageBooted(): void
    {
        //
    }
}
