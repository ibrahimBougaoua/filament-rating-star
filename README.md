# Filament Star rating field & column.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibrahimbougaoua/filament-rating-star.svg?style=flat-square)](https://packagist.org/packages/ibrahimbougaoua/filament-rating-star)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibrahimbougaoua/filament-rating-star/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ibrahimbougaoua/filament-rating-star/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibrahimbougaoua/filament-rating-star/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ibrahimbougaoua/filament-rating-star/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ibrahimbougaoua/filament-rating-star.svg?style=flat-square)](https://packagist.org/packages/ibrahimbougaoua/filament-rating-star)

Star rating field & Star column.

<a href="https://www.youtube.com/watch?v=ON3VEyvb96M" target="_blank">Youtube Video</a>
<br />
[<img src="https://raw.githubusercontent.com/ibrahimBougaoua/screenshot/main/images/rating.png" width="100%">](https://www.youtube.com/watch?v=ON3VEyvb96M)
<br /><br />
[<img src="https://raw.githubusercontent.com/ibrahimBougaoua/screenshot/main/images/ibrahim-bougaoua-star-rating.png" width="100%">](https://www.youtube.com/watch?v=ON3VEyvb96M)

## Installation

You can install the package via composer:

```bash
composer require ibrahimbougaoua/filament-rating-star
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-rating-star-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-rating-star-config"
```

This is the contents of the published config file:

```php
return [
    'stars' => [
        'star1' => '1',
        'star2' => '2',
        'star3' => '3',
        'star4' => '4',
        'star5' => '5',
    ]
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-rating-star-views"
```

## Usage

With Form :

```php
return $form
    ->schema([
        Section::make()
            ->schema([
                RatingStar::make('rating')
					->label('Rating')
				])
			])
```

With Table :

```php
return $table
    ->columns([
        RatingStarColumn::make('rating')
    ])
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ibrahim](https://github.com/ibrahimBougaoua)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
