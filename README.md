# modules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/Laravel/modules.svg?style=flat-square)](https://packagist.org/packages/Laravel/modules)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/Laravel/modules/master.svg?style=flat-square)](https://travis-ci.org/Laravel/modules)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/Laravel/modules.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/Laravel/modules/?branch=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/25320a08-8af4-475e-a23e-3321f55bf8d2.svg?style=flat-square)](https://insight.sensiolabs.com/projects/25320a08-8af4-475e-a23e-3321f55bf8d2)
[![Quality Score](https://img.shields.io/scrutinizer/g/Laravel/modules.svg?style=flat-square)](https://scrutinizer-ci.com/g/Laravel/modules)
[![Total Downloads](https://img.shields.io/packagist/dt/Laravel/modules.svg?style=flat-square)](https://packagist.org/packages/Laravel/modules)

| **Laravel**  |  **modules** |
|---|---|
| 5.4  | ^1.0  |
| 5.5  | ^2.0  |
| 5.6  | ^3.0  |
| 5.7  | ^4.0  |
| 5.8  | ^5.0  |

`Laravel/modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 5.

This package is a re-published, re-organised and maintained version of [pingpong/modules](https://github.com/pingpong-labs/modules), which isn't maintained anymore. This package is used in [AsgardCMS](https://asgardcms.com/).

With one big added bonus that the original package didn't have: **tests**.

Find out why you should use this package in the article: [Writing modular applications with modules](https://nicolaswidart.com/blog/writing-modular-applications-with-modules).

## Install

To install through Composer, by run the following command:

``` bash
composer require lfml/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Laravel\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

You'll find installation instructions and full documentation on [https://Laravel.com/modules/](https://Laravel.com/modules/).

## Credits

- [Nicolas Widart](https://github.com/nwidart)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Nicolas Widart

Nicolas Widart is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://nwidart.com/), or visit [my website](https://nicolaswidart.com).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
