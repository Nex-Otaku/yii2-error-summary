<p align="center">
    <h1 align="center">Yii2 Error Summary</h1>
</p>

Why?
------------

Bacause sometimes you want all validation errors of model as single line of text, and Yii2 does not provide it out of the box.

Usage
-----

```php
$this->log('Order validation failed: ' . ErrorSummary::of($order));
```

Installation
------------

The preferred way to install is through [composer](http://getcomposer.org/download/).

```
composer require nex-otaku/yii2-error-summary
```

Alternatively, you can just copy-paste source file to your project. It has no dependencies and should work just fine.

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2025 © Nex Otaku.
