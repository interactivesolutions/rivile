<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Export;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\I06ParhRepository;

/**
 * Class ExportI06Parh
 * @package InteractiveSolutions\Rivile\Console\Commands\Export
 */
class ExportI06Parh extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-i06parh {action} {id}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_I06 - Export';
    /**
     * @var I06ParhRepository
     */
    private $parhRepository;

    /**
     * ExportI06Parh constructor.
     * @param I06ParhRepository $parhRepository
     */
    public function __construct(I06ParhRepository $parhRepository)
    {
        parent::__construct();

        $this->parhRepository = $parhRepository;
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function init()
    {
        $this->action = 'I06';
        $this->xmlRootName = 'I06';

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

        $this->data = $this->parhRepository->find($this->argument('id'))->toArray();
    }

    /**
     * @param array $response
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function handleResponse(array $response)
    {
        $this->clearEmptySpaces($response);

        /** @var I06Parh $client */
        $client = $this->parhRepository->updateOrCreate(
            ['I06_DOK_NR' => $response['I06_DOK_NR']],
            $response
        );
    }
}
