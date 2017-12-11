## Installation

Require this package with composer:

```shell
composer require interactivesolutions/rivile
```

After updating composer, add the ServiceProvider to the providers array in config/app.php

```php
InteractiveSolutions\Rivile\Providers\RivileServiceProvider::class,
```


Copy the package config to your local config with the publish command:

```shell
php artisan vendor:publish --provider="InteractiveSolutions\Rivile\Providers\RivileServiceProvider::class,"
```

Add new parameter into .evn:

- Rivile access key `RIVILE_ACCESS_KEY`.
- Rivile id prefix `RIVILE_ID_PREFIX`, default value: `XXX`.