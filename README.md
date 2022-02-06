# Laravel Hungarian Zip Codes with Settlement names
[![Latest Stable Version](http://poser.pugx.org/zsoltjanes/laravel-hungarian-zip-codes/v)](https://packagist.org/packages/zsoltjanes/laravel-hungarian-zip-codes) 
[![Total Downloads](http://poser.pugx.org/zsoltjanes/laravel-hungarian-zip-codes/downloads)](https://packagist.org/packages/zsoltjanes/laravel-hungarian-zip-codes) 
[![Latest Unstable Version](http://poser.pugx.org/zsoltjanes/laravel-hungarian-zip-codes/v/unstable)](https://packagist.org/packages/zsoltjanes/laravel-hungarian-zip-codes) 
[![License](http://poser.pugx.org/zsoltjanes/laravel-hungarian-zip-codes/license)](https://packagist.org/packages/zsoltjanes/laravel-hungarian-zip-codes) 

With this package you are able to make a new database table and seed the current hungarian zip codes with settlement names and Budapest's districts. The original database file can be found in the official [hungarian post office's website](https://www.posta.hu/szolgaltatasok/iranyitoszam-kereso).

## Installation

You can install the package via composer:
```bash
composer require zsoltjanes/laravel-hungarian-zip-codes
```
You have to publish the migration, the seeder and the data file:
```bash
php artisan vendor:publish --tag="hungarian-zip-codes-default"
```
Check the configuration before continue. You can publish the config file with:
```bash
php artisan vendor:publish --tag="hungarian-zip-codes-config"
```
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