<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use InteractiveSolutions\HoneycombCore\Console\HCCommand;
use InteractiveSolutions\Rivile\Models\N17Prod;

/**
 * Class GetProducts
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
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
    public function handle()
    {
        if (N17Prod::count() > 0) {
            $this->call('rivile:update-products');
        } else {
            $this->call('rivile:import-products');
        }
    }
}
