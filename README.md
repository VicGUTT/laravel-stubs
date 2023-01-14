# Overwrites and provides an opinionated version of the Laravel stubs

[![GitHub Tests Action Status](https://github.com/vicgutt/laravel-stubs/actions/workflows/run-tests.yml/badge.svg)](https://github.com/vicgutt/laravel-stubs/actions/workflows/run-tests.yml)
[![GitHub PHPStan Action Status](https://github.com/vicgutt/laravel-stubs/actions/workflows/phpstan.yml/badge.svg)](https://github.com/vicgutt/laravel-stubs/actions/workflows/phpstan.yml)
[![GitHub Code Style Action Status](https://github.com/vicgutt/laravel-stubs/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/vicgutt/laravel-stubs/actions/workflows/fix-php-code-style-issues.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/vicgutt/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/vicgutt/laravel-stubs)
[![Total Downloads](https://img.shields.io/packagist/dt/vicgutt/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/vicgutt/laravel-stubs)

---

This package provides opinionated versions of the Laravel stubs and may provide it's own in the future.

It's also important to note that this package extends the underlying Laravel command while completly overwriting the command signature. Now, the command always set's the "force" flag to `true`. Meaning, any previously published stub will be overwritten everytime this command gets run. 

## Installation

You can install the package via composer:

```bash
composer require vicgutt/laravel-stubs
```

## Usage

```bash
php artisan stub:publish
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

If you're interested in contributing to the project, please read our [contributing docs](https://github.com/vicgutt/laravel-stubs/blob/main/.github/CONTRIBUTING.md) **before submitting a pull request**.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Victor GUTT](https://github.com/vicgutt)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
