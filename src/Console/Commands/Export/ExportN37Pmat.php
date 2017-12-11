<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Export;


use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\N37PmatRepository;

/**
 * Class ExportN37Pmat
 * @package InteractiveSolutions\Rivile\Console\Commands\Export
 */
class ExportN37Pmat extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-n37pmat {action} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_N37 - Export';

    /**
     * @var N37PmatRepository
     */
    private $n37PmatRepository;

    /**
     * ExportN37Pmat constructor.
     * @param N37PmatRepository $n37PmatRepository
     */
    public function __construct(N37PmatRepository $n37PmatRepository)
    {
        parent::__construct();

        $this->n37PmatRepository = $n37PmatRepository;
    }

    /**
     * Initializing data

     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function init()
    {
        $this->action = 'N37';
        $this->xmlRootName = 'N37';

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

        $this->data = $this->n37PmatRepository->find($this->argument('id'))->toArray();
    }
}