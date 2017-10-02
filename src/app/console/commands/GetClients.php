<?php namespace interactivesolutions\rivile\app\console\commands;

use interactivesolutions\honeycombcore\commands\HCCommand;
use interactivesolutions\rivile\database\models\N08Klij;

class GetClients extends HCCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:get-clients';

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
        if (N08Klij::count() > 0)
            $this->call('rivile:update-clients');
        else
            $this->call('rivile:import-clients');
    }
}