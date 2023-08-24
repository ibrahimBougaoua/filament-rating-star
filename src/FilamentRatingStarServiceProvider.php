<?php

namespace IbrahimBougaoua\FilamentRatingStar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IbrahimBougaoua\FilamentRatingStar\Commands\FilamentRatingStarCommand;

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
            ->hasMigration('create_filament-rating-star_table')
            ->hasCommand(FilamentRatingStarCommand::class);
    }
}
