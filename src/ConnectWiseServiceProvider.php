<?php

namespace Wjbecker\ConnectwiseApiClient;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ConnectWiseServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('connectwise-api-client')
            ->hasConfigFile();
    }
}
