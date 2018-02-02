<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use InteractiveSolutions\HoneycombCore\Console\HCCommand;
use InteractiveSolutions\Rivile\Models\Rivile\N08Klij;

/**
 * Class GetClients
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
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
    public function handle()
    {
        if (N08Klij::count() > 0) {
            $this->call('rivile:update-clients');
        } else {
            $this->call('rivile:import-clients');
        }
    }
}
