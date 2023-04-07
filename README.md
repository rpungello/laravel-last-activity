# Track last activity for users of Laravel apps

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rpungello/laravel-last-activity.svg?style=flat-square)](https://packagist.org/packages/rpungello/laravel-last-activity)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rpungello/laravel-last-activity/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rpungello/laravel-last-activity/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rpungello/laravel-last-activity/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rpungello/laravel-last-activity/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rpungello/laravel-last-activity.svg?style=flat-square)](https://packagist.org/packages/rpungello/laravel-last-activity)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rpungello/laravel-last-activity
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-last-activity-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-last-activity-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-last-activity-views"
```

## Usage

```php
$laravelLastActivity = new Rpungello\LaravelLastActivity();
echo $laravelLastActivity->echoPhrase('Hello, Rpungello!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rob Pungello](https://github.com/rpungello)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
