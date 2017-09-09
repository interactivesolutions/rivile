<?php

namespace interactivesolutions\rivile\app\providers;

use interactivesolutions\honeycombcore\providers\HCBaseServiceProvider;

class RivileServiceProvider extends HCBaseServiceProvider
{
    protected $homeDirectory = __DIR__;

    protected $commands = [];

    protected $namespace = 'interactivesolutions\rivile\app\http\controllers';

    public $serviceProviderNameSpace = 'Rivile';
}





