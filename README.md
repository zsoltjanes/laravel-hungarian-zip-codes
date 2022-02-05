# Laravel Hungarian Zip Codes (Magyar irányító számok)

With this package you are abble to make a new database table and seed the current hungarian zip codes with city name and district. The original database file can be found in the official hungarian post office's website: https://www.posta.hu/szolgaltatasok/iranyitoszam-kereso  

## Installation

You can install the package via composer:

```bash
composer require zsoltjanes/laravel-hungarian-zip-codes
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="hungarian-zip-codes-config"
```

You can publish the migration and the seeder file:

```bash
php artisan vendor:publish --tag="hungarian-zip-codes-migration-and-seeder"
```

You can run the migration

```bash
php artisan migrate
```

You can run the seeder:

```bash
php artisan db:seed --class=HungarianZipCodesSeeder
```

In the config file you can specify the table name where you want to save the data

```php
return [
    'table_name' => 'hungarian_zip_codes'
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.