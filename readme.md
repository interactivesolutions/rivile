## Installation

Require this package with composer:

```shell
composer require interactivesolutions/rivile
```

After updating composer, add the ServiceProvider to the providers array in config/app.php

```php
interactivesolutions\rivile\app\providers\RivileServiceProvider::class,
```


Copy the package config to your local config with the publish command:

```shell
php artisan vendor:publish --provider="interactivesolutions\rivile\app\providers\RivileServiceProvider"
```