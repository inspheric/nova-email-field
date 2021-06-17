# Laravel Nova Email Field
An email input and mailto link field for Laravel Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/inspheric/nova-email-field.svg?style=flat-square)](https://packagist.org/packages/inspheric/nova-email-field)
[![Total Downloads](https://img.shields.io/packagist/dt/inspheric/nova-email-field.svg?style=flat-square)](https://packagist.org/packages/inspheric/nova-email-field)

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require inspheric/nova-email-field
```

## Usage

Add the field to your resource in the ```fields``` method:
```php
use Inspheric\Fields\Email;

Email::make('Email')
    ->rules('email', /* ... */),
```

The field extends the `Laravel\Nova\Fields\Text` field, so all the usual methods are available.

**Now supports readonly, placeholder and overriding the default `type="email"` if you prefer not to have the validation in the browser. This is from the standard Nova `Text` field so is not documented here.**

It is recommended that you include the standard `email` validation rule, as it is not automatically added.

### Options
#### Clickable
Make the field display as a mailto link on the detail page:

```php
Email::make('Email')
    ->clickable(),
```

#### Clickable on Index
Make the field display as a mailto link on the index page:

```php
Email::make('Email')
    ->clickableOnIndex(),
```

#### Always Clickable
Combination of the two functions above for simplicity:

```php
Email::make('Email')
    ->alwaysClickable(),
```

## Appearance
### Index (default)
![index-field](https://raw.githubusercontent.com/inspheric/nova-email-field/master/docs/index-field.png)

The field is displayed as a plain `<span>` element. If the field value is blank, an em dash will be displayed.

### Index (clickable)
![index-field-clickable](https://raw.githubusercontent.com/inspheric/nova-email-field/master/docs/index-field-clickable.png)

The field is displayed as an `<a href="mailto:...">` element with an icon. If the field value is blank, an em dash will be displayed instead of a link.

### Detail (default)
![detail-field](https://raw.githubusercontent.com/inspheric/nova-email-field/master/docs/detail-field-plain.png)

The field is displayed as a plain `<span>` element. If the field value is blank, an em dash will be displayed.

### Detail (clickable)
![detail-field-clickable](https://raw.githubusercontent.com/inspheric/nova-email-field/master/docs/detail-field-clickable.png)

The field is displayed as an `<a href="mailto:...">` element with an icon. If the field value is blank, an em dash will be displayed instead of a link.

### Form
![form-field](https://raw.githubusercontent.com/inspheric/nova-email-field/master/docs/form-field.png)

The field is displayed as an `<input type="email">` element.

