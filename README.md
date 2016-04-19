# Laravel Enum
[![License](https://poser.pugx.org/wboyz/laravel-enum/license)](https://packagist.org/packages/wboyz/laravel-enum)
[![Latest Stable Version](https://poser.pugx.org/wboyz/laravel-enum/v/stable)](https://packagist.org/packages/wboyz/laravel-enum)

Create a base enum class to laravel framework.

## Installation

Require this package with composer:

```
composer require wboyz/laravel-enum
```

## General Use

```php
use WBoyz\LaravelEnum\BaseEnum;

class Fruits extends BaseEnum
{
    const APPLE = 1;
    const PEACH = 2;
    const PEAR = 3;
}

...

$values = Fruits::getValues();
// [1, 2, 3]

$keys = Fruits::getKeys();
// ['APPLE', 'PEACH', 'PEAR']

$dictionary = Fruits::toDictionary();
// ['APPLE' => 1, 'PEACH' => 2, 'PEAR' => 3]

$result = Fruits::hasValue(1);  
// true

$result = Fruits::hasKey('APPLE');
// true

$result = Fruits::getValue('APPLE');
// 1

$result = Fruits::getValue('MELON');
// 0


```
