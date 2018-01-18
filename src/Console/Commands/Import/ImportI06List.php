<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\OrdersImportEvent;
use InteractiveSolutions\Rivile\Models\I06Parh;
use InteractiveSolutions\Rivile\Repositories\I06ParhRepository;

/**
 * Class ImportI06List
 * @package InteractiveSolutions\Rivile\Console\Commands\Import
 */
class ImportI06List extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-orders';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I06_LIST - Import';
    /**
     * @var I06ParhRepository
     */
    private $i06partRepository;

    /**
     * ImportI06List constructor.
     * @param I06ParhRepository $i06ParhRepository
     */
    public function __construct(I06ParhRepository $i06ParhRepository)
    {
        $this->i06partRepository = $i06ParhRepository;

        parent::__construct();
    }

    /**
     * Initializing data
     */
    protected function init()
    {
        $lastItem = null;

        $this->listType = 'A';
        $this->filters = "I06_KODAS_PO>'$lastItem'";
        $this->action = 'I06';
        $this->xmlRootName = 'I06';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     * @throws \Exception
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function handleResponse(array $response)
    {
        $lastItem = null;
        $i06Ids = [];

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);

            /** @var I06Parh $client */
            $client = $this->i06partRepository->updateOrCreate(
                ['I06_KODAS_PO' => $item['I06_KODAS_PO']],
                $item
            );
// todo: save I07, I08, I13
//            $this->saveN33(array_get($item, 'N33'));

            $i06Ids[] = $client->id;
        }

        event(new OrdersImportEvent($i06Ids));

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I06_KODAS_PO>'" . $lastItem['I06_KODAS_PO'] . "'";
            $this->makeCall();
        }
    }
}
