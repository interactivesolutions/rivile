<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands;

use InteractiveSolutions\HoneycombCore\Console\HCCommand;
use InteractiveSolutions\Rivile\Repositories\I06ParhRepository;

/**
 * Class GetI06List
 * @package InteractiveSolutions\Rivile\Console\Commands
 */
class GetI06List extends HCCommand
{
    /**
     * @var I06ParhRepository
     */
    private $i06ParhRepository;

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
     * GetI06List constructor.
     * @param I06ParhRepository $i06ParhRepository
     */
    public function __construct(I06ParhRepository $i06ParhRepository)
    {
        parent::__construct();

        $this->i06ParhRepository = $i06ParhRepository;
    }

    /**
     * Initializing data
     * @throws \Exception
     */
    public function handle()
    {
        if ($this->i06ParhRepository->count() > 0) {
            $this->call('rivile:update-orders');
        } else {
            $this->call('rivile:import-orders');
        }
    }
}
