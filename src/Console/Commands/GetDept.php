<?php

namespace InteractiveSolutions\Rivile\Console\Commands;

use InteractiveSolutions\HoneycombCore\Console\HCCommand;
use InteractiveSolutions\Rivile\Models\I44Skol;

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
    public function handle()
    {
        if (I44Skol::count() > 0) {
            $this->call('rivile:update-dept');
        } else {
            $this->call('rivile:import-dept');
        }
    }
}