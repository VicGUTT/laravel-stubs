# Overwrites and provides an opinionated version of the Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vicgutt/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/vicgutt/laravel-stubs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/vicgutt/laravel-stubs/run-tests?label=tests)](https://github.com/vicgutt/laravel-stubs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/vicgutt/laravel-stubs/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/vicgutt/laravel-stubs/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
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

Please see [CONTRIBUTING](https://github.com/vicgutt/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Victor GUTT](https://github.com/vicgutt)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
