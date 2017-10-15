<?php

namespace interactivesolutions\rivile\app\providers;

use interactivesolutions\honeycombcore\providers\HCBaseServiceProvider;
use interactivesolutions\rivile\app\console\commands\GetClients;
use interactivesolutions\rivile\app\console\commands\export\ExportClient;
use interactivesolutions\rivile\app\console\commands\GetPayments;
use interactivesolutions\rivile\app\console\commands\GetProducts;
use interactivesolutions\rivile\app\console\commands\import\ImportClients;
use interactivesolutions\rivile\app\console\commands\import\ImportPayments;
use interactivesolutions\rivile\app\console\commands\import\ImportProducts;
use interactivesolutions\rivile\app\console\commands\update\UpdateClients;
use interactivesolutions\rivile\app\console\commands\RivileCore;
use interactivesolutions\rivile\app\console\commands\update\UpdatePayments;
use interactivesolutions\rivile\app\console\commands\update\UpdateProducts;

class RivileServiceProvider extends HCBaseServiceProvider
{
    protected $homeDirectory = __DIR__;

    protected $commands = [
        RivileCore::class,

        GetClients::class,
        GetProducts::class,
        GetPayments::class,

        ImportClients::class,
        ImportProducts::class,
        ImportPayments::class,

        UpdateClients::class,
        UpdateProducts::class,
        UpdatePayments::class,

        ExportClient::class,
    ];

    protected $namespace = 'interactivesolutions\rivile\app\http\controllers';

    public $serviceProviderNameSpace = 'Rivile';
}





