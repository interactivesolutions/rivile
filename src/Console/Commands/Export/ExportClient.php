<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Export;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\N08KlijRepository;

/**
 * Class ExportClient
 * @package InteractiveSolutions\Rivile\Console\Commands\Export
 */
class ExportClient extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-client {action} {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_N08 - Export';

    /**
     * @var N08KlijRepository
     */
    private $n08KlijRepository;

    /**
     * ExportClient constructor.
     * @param N08KlijRepository $n08KlijRepository
     */
    public function __construct(N08KlijRepository $n08KlijRepository)
    {
        parent::__construct();

        $this->n08KlijRepository = $n08KlijRepository;
    }

    /**
     * Initializing data
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function init()
    {
        $this->action = 'N08';

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

        $this->data = $this->n08KlijRepository->find($this->argument('id'))->toArray();
    }
}