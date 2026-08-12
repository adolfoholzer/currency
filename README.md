<div align="center">
    <h1>Currency</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/adolfoholzer/currency"><img src="https://img.shields.io/packagist/v/adolfoholzer/currency.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/adolfoholzer/currency"><img src="https://img.shields.io/packagist/php-v/adolfoholzer/currency.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/adolfoholzer/currency"><img src="https://badge.laravel.cloud/badge/adolfoholzer/currency?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/adolfoholzer/currency/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/adolfoholzer/currency/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/adolfoholzer/currency"><img src="https://img.shields.io/packagist/dt/adolfoholzer/currency.svg?style=flat-square" alt="Total Downloads"></a>
</p>

A lightweight Laravel package that centralizes currency definitions across your applications.

## Installation

You can install the package via Composer:

```bash
composer require adolfoholzer/currency
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="currency"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="currency-config"
```

## Usage

### Getting the default currency

```php
use Zitro\Currency\Facades\Currency;

$currency = Currency::default();
```

---

### Using the enum

```php
use Zitro\Currency\Enums\CurrencyType;

$currency = CurrencyType::USD;
```

Example:

```php
$currency->code();
$currency->symbol();
```

---

## Examples

### Currency code

```php
CurrencyType::USD->code();

// USD
```

---

### Currency symbol

```php
CurrencyType::USD->symbol();

// $
```

---

### Comparing currencies

```php
if ($currency === CurrencyType::USD) {
    //
}
```

---

## Available currencies

The package currently supports the following currencies:

| Currency | ISO Code |
|----------|----------|
| Uruguayan Peso | UYU |
| US Dollar | USD |
| Euro | EUR |

> More currencies can easily be added by extending the `CurrencyType` enum.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Currency! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Adolfo Holzer](https://github.com/adolfoholzer)
- [All Contributors](../../contributors)

## License

Currency is open-sourced software licensed under the [MIT license](LICENSE.md).
