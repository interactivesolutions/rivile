<?php namespace interactivesolutions\rivile\app\console\commands;

use interactivesolutions\honeycombcore\commands\HCCommand;
use interactivesolutions\rivile\database\models\I44Skol;

class GetDept extends HCCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:get-dept';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I44_LIST - import or update';

    /**
     * Initializing data
     */
    public function handle ()
    {
        if (I44Skol::count() > 0)
            $this->call('rivile:update-dept');
        else
            $this->call('rivile:import-dept');
    }
}