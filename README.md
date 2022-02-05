# Laravel Hungarian Zip Codes with Settlement names

With this package you are able to make a new database table and seed the current hungarian zip codes with settlement names and Budapest's districts. The original database file can be found in the official hungarian post office's website: https://www.posta.hu/szolgaltatasok/iranyitoszam-kereso  

## Installation

You can install the package via composer:

```bash
composer require zsoltjanes/laravel-hungarian-zip-codes
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="hungarian-zip-codes-config"
```

You can publish the migration, the seeder and the data file:

```bash
php artisan vendor:publish --tag="hungarian-zip-codes-migration-seeder-data"
```
Check the configuration before continue. 
You can run the migration

```bash
php artisan migrate
```

You can run the seeder:

```bash
php artisan db:seed --class=HungarianZipCodesSeeder
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.