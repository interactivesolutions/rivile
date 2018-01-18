<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use InteractiveSolutions\HoneycombCore\Console\HCCommand;
use InteractiveSolutions\Rivile\Models\I17Vpro;

/**
 * Class GetInternalGoods
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
class GetInternalGoods extends HCCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:get-internal-goods';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I17_LIST - import or update';

    /**
     * Initializing data
     */
    public function handle()
    {
        if (I17Vpro::count() > 0) {
            $this->call('rivile:update-internal-goods');
        } else {
            $this->call('rivile:import-internal-goods');
        }
    }
}
