<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Export;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\I07PardRepository;

/**
 * Class ExportI07Pard
 * @package InteractiveSolutions\Rivile\Console\Commands\Export
 */
class ExportI07Pard extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:export-i07pard {action : Available types: new, update, delete} {id : Order product id}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'EDIT_I07 - Export';
    /**
     * @var I07PardRepository
     */
    private $pardRepository;

    /**
     * ExportI07Pard constructor.
     * @param I07PardRepository $pardRepository
     */
    public function __construct(I07PardRepository $pardRepository)
    {
        parent::__construct();

        $this->pardRepository = $pardRepository;
    }

    /**
     *
     */
    protected function init()
    {
        $this->action = 'I07';
        $this->xmlRootName = 'I07';
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
        $this->data = $this->pardRepository->find($this->argument('id'))->toArray();
    }
}
