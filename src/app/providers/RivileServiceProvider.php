<?php

namespace interactivesolutions\rivile\app\providers;

use interactivesolutions\honeycombcore\providers\HCBaseServiceProvider;
use interactivesolutions\rivile\app\console\commands\GetClients;
use interactivesolutions\rivile\app\console\commands\import\ImportClients;
use interactivesolutions\rivile\app\console\commands\update\UpdateClients;
use interactivesolutions\rivile\app\console\commands\RivileCore;

class RivileServiceProvider extends HCBaseServiceProvider
{
    protected $homeDirectory = __DIR__;

    protected $commands = [
        RivileCore::class,
        ImportClients::class,
        UpdateClients::class,
        GetClients::class,
    ];

    protected $namespace = 'interactivesolutions\rivile\app\http\controllers';

    public $serviceProviderNameSpace = 'Rivile';
}





