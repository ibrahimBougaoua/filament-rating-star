<?php

namespace IbrahimBougaoua\FilamentRatingStar;

use IbrahimBougaoua\FilamentRatingStar\Commands\FilamentRatingStarCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;

class FilamentRatingStarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-rating-star')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(FilamentRatingStarCommand::class);
    }

    public function packageBooted(): void
    {
        FilamentAsset::register(
            [
                Css::make('filament-rating-star-styles', __DIR__ . '/../resources/dist/style.css')
            ],
            'ibrahimbougaoua/filament-rating-star'
        );
    }
}
