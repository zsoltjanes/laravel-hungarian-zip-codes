<?php

namespace Zsoltjanes\LaravelHungarianZipCodes;

use Illuminate\Support\ServiceProvider;

class HungarianZipCodesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/hungarian-zip-codes.php' => config_path('hungarian-zip-codes.php'),
        ], 'hungarian-zip-codes-config');

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
            __DIR__ . '/../database/seeder/' => database_path('seeder')
        ], 'hungarian-zip-codes-migration-and-seeder');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/hungarian-zip-codes.php', 'hungarian-zip-codes'
        );
    }
}
