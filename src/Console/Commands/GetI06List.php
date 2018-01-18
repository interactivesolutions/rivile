<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use InteractiveSolutions\HoneycombCore\Console\HCCommand;
use InteractiveSolutions\Rivile\Models\I06Parh;

/**
 * Class GetI06List
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
class GetI06List extends HCCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:get-orders';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I06_LIST - import or update';

    /**
     * Initializing data
     */
    public function handle()
    {
        if (I06Parh::count() > 0) {
            $this->call('rivile:update-orders');
        } else {
            $this->call('rivile:import-orders');
        }
    }
}
