# Opinionated Laravel stubs

## Installation

You can install the package via composer:

```bash
composer require mltstephane/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan stub:publish-opinionated --force"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan stub:publish-opinionated
```

## Testing

``` bash
composer test
```

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
