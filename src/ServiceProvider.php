<?php

namespace FamilyTree365\LaravelDna;

use FamilyTree365\LaravelDna\Commands\DnaImporter;
use FamilyTree365\LaravelDna\Utils\DnaParser;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->commands([
            DnaImporter::class,
        ]);

        $this->app->bind('FamilyTree365/laravel-dna:parser', function () {
            return new DnaParser();
        });
    }

    // public function boot()
    // {
    //     $this->loadMigrationsFrom(__DIR__.'/migrations/');
    // }
}
