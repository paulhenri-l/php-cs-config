# PhpCsConfig

![Tests](https://github.com/paulhenri-l/php-cs-config/workflows/Tests/badge.svg)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

## Installation

```
composer require paulhenri-l/php-cs-config --dev
```

## Usage

Inside your `.php-cs-fixer.php` config

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$finder = \PhpCsFixer\Finder::create()->in([
    'src/', 'tests/'
]);

return (new PaulhenriL\PhpCsConfig\Config())->setRules([
    '@paulhenri-l' => true,
    'array_syntax' => ['syntax' => 'short'],
])->setFinder($finder);
```
