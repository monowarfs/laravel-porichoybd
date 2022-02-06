# Laravel package for porichoybd.

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/monowarfs/laravel-porichoybd/run-tests?label=tests)](https://github.com/monowarfs/laravel-porichoybd/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/monowarfs/laravel-porichoybd/Check%20&%20fix%20styling?label=code%20style)](https://github.com/monowarfs/laravel-porichoybd/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/monowarfs/porichoybd.svg?style=flat-square)](https://packagist.org/packages/monowarfs/porichoybd)

Laravel package for porichoybd.gov.bd APIs implementation.

## Support us

https://api.porichoybd.com/swagger/v1/swagger.json

## Installation

You can install the package via composer:

```bash
composer require monowarfs/porichoybd
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="porichoybd-config"
```

This is the contents of the published config file:

```php
return [
    'is_live' => env('PORICHOY_GOV_BD_SERVICE_PROD', false),
    'api'=> [
        'key' => env('PORICHOY_GOV_BD_API_KEY', ''),
        'endpoints' =>[
            'live' => [
                'basic' => 'https://api.porichoybd.com/api/Kyc/nid-person-values',
                'basic_n_photo' => 'https://api.porichoybd.com/api/kyc/nid-person',
                'basic_n_signature' => 'https://api.porichoybd.com/api/kyc/nid-person',
                'autofill' => 'https://api.porichoybd.com/api/kyc/nid-person-values',
                'fatchmatch' => 'https://api.porichoybd.com/api/kyc/nid-person-values-image-match',
                'birth_registration' => 'https://api.porichoybd.com/api/kyc/verify-birth-registration'
            ],
            'test' => [
                'basic' => 'https://api.porichoybd.com/api/kyc/test-nid-person',
                'basic_n_photo' => 'https://api.porichoybd.com/api/kyc/test-nid-person',
                'basic_n_signature' => 'https://api.porichoybd.com/api/kyc/test-nid-person',
                'autofill' => 'https://api.porichoybd.com/api/kyc/test-nid-person-values',
                'fatchmatch' => 'https://api.porichoybd.com/api/kyc/test-nid-person-values-image-match',
            ]
        ]
    ],
];
```


## Usage

```php
$porichoy = new Monowarfs\PorichoyBD();
echo $porichoy->basic('{
"person_dob": "YYYY-MM-DD",
"national_id": "XXXXXXXXXX",
}');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Monowar Hossain](https://github.com/monowarfs)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
