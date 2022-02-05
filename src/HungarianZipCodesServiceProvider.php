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
            __DIR__ . '/../database/migrations/2022_02_03_171152_create_hun_zip_codes_table.php' => database_path('migrations/2022_02222_03_171152_create_hun_zip_codes_table.php'),
            __DIR__ . '/../database/seeders/' => database_path('seeders'),
            __DIR__ . '/../database/external/' => database_path('external')
        ], 'hungarian-zip-codes-migration-seeder-data');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/hungarian-zip-codes.php', 'hungarian-zip-codes'
        );
    }
}
