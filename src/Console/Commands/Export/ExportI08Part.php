<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Export;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\I08PartRepository;

/**
 * Class ExportI08Part
 * @package InteractiveSolutions\Rivile\Console\Commands\Export
 */
class ExportI08Part extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-i08part {action : Available types: new, update, delete} {id : Order product id}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_I08 - Export';
    /**
     * @var I08PartRepository
     */
    private $partRepository;

    /**
     * ExportI08Part constructor.
     * @param I08PartRepository $partRepository
     */
    public function __construct(I08PartRepository $partRepository)
    {
        parent::__construct();

        $this->partRepository = $partRepository;
    }

    /**
     *
     */
    protected function init()
    {
        $this->action = 'I08';
        $this->xmlRootName = 'I08';
        switch ($this->argument('action')) {
            case 'new':
                $this->operation = 'I';
                $this->actionMethod = self::ACTION_METHOD_NEW;
                break;
            case 'update':
                $this->operation = 'U';
                $this->actionMethod = self::ACTION_METHOD_UPDATE;
                break;
            case 'delete':
                $this->operation = 'D';
                $this->actionMethod = self::ACTION_METHOD_DELETE;
                break;
        }
        $this->data = $this->partRepository->find($this->argument('id'))->toArray();
    }
}
