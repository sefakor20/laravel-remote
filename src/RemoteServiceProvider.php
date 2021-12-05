<?php

namespace RCodes\Remote;

use RCodes\Remote\Commands\RemoteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-remote')
            ->hasConfigFile()
            ->hasCommand(RemoteCommand::class);
    }
}
