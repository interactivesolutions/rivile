<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Export;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\N17ProdRepository;

/**
 * Class ExportProduct
 * @package InteractiveSolutions\Rivile\Console\Commands\Export
 */
class ExportProduct extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-product {action} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_N17 - Export';

    /**
     * @var N17ProdRepository
     */
    private $n17ProdRepository;

    /**
     * ExportProduct constructor.
     * @param N17ProdRepository $n17ProdRepository
     */
    public function __construct(N17ProdRepository $n17ProdRepository)
    {
        parent::__construct();

        $this->n17ProdRepository = $n17ProdRepository;
    }

    /**
     * Initializing data
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function init()
    {
        $this->action = 'N17';

        switch ($this->argument('action')) {
            case 'new':

                $this->operation = 'I';
                $this->actionMethod = self::ACTION_METHOD_NEW;
                break;

            case 'update':

                $this->operation = 'U';
                $this->actionMethod = self::ACTION_METHOD_UPDATE;
                break;
        }

        $this->data = $this->n17ProdRepository->find($this->argument('id'))->toArray();
    }
}