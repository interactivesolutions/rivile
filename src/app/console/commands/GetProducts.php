<?php namespace interactivesolutions\rivile\app\console\commands;

use interactivesolutions\honeycombcore\commands\HCCommand;
use interactivesolutions\rivile\database\models\N17Prod;

class GetProducts extends HCCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:get-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N08_LIST - import or update';

    /**
     * Initializing data
     */
    public function handle ()
    {
        if (N17Prod::count() > 0)
            $this->call('rivile:update-products');
        else
            $this->call('rivile:import-products');
    }
}