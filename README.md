# Jshrink Service Provider

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A [Jshrink](https://github.com/tedious/JShrink) provider for Silex based on [nibsirahsieu/SalvaJshrinkBundle](https://github.com/nibsirahsieu/SalvaJshrinkBundle).

## Install

Via Composer

``` bash
$ composer require emanueleminotto/jshrink-provider
```

## Usage

Initialize it using `register`

```php
use EmanueleMinotto\JshrinkServiceProvider\JshrinkServiceProvider;

$app->register(new JshrinkServiceProvider(), array(
    'jshrink.cache_dir' => '/your/cache/path', // default: sys_get_temp_dir()
    'jshrink.enabled' => true,
    'jshrink.flagged_comments' => true,
));
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [Emanuele Minotto][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/emanueleminotto/jshrink-service-provider.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/EmanueleMinotto/JshrinkServiceProvider/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/EmanueleMinotto/JshrinkServiceProvider.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/EmanueleMinotto/JshrinkServiceProvider.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/emanueleminotto/jshrink-service-provider.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/emanueleminotto/jshrink-service-provider
[link-travis]: https://travis-ci.org/EmanueleMinotto/JshrinkServiceProvider
[link-scrutinizer]: https://scrutinizer-ci.com/g/EmanueleMinotto/JshrinkServiceProvider/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/EmanueleMinotto/JshrinkServiceProvider
[link-downloads]: https://packagist.org/packages/emanueleminotto/jshrink-service-provider
[link-author]: https://github.com/EmanueleMinotto
[link-contributors]: ../../contributors
