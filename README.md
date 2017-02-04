# Cloud-to-Butt PSR-7 Middleware

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A simple PSR-7 middleware that replaces "cloud" with "butt".  Created during the SunshinePHP 2017 hackathon.  Never tested in production so YMMV.

## Install

Via Composer

``` bash
$ composer require colinodell/cloud-to-butt
```

## Usage

``` php
$cloudToButt = new CloudToButtMiddleware();

$response = $cloudToButt($request, $response, $next);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email colinodell@gmail.com instead of using the issue tracker.

## Credits

- [Colin O'Dell][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/colinodell/cloud-to-butt.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/colinodell/cloud-to-butt/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/colinodell/cloud-to-butt.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/colinodell/cloud-to-butt.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/colinodell/cloud-to-butt.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/colinodell/cloud-to-butt
[link-travis]: https://travis-ci.org/colinodell/cloud-to-butt
[link-scrutinizer]: https://scrutinizer-ci.com/g/colinodell/cloud-to-butt/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/colinodell/cloud-to-butt
[link-downloads]: https://packagist.org/packages/colinodell/cloud-to-butt
[link-author]: https://github.com/colinodell
[link-contributors]: ../../contributors
