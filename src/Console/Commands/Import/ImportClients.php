<?php

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\N08Klij;

class ImportClients extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N08_LIST - Import';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = N08Klij::orderBy('created_at', 'desc')->first();

        $this->listType = 'H';
        $this->filters = "N08_KODAS_KS>'$latItem'";
        $this->action = 'N08';
        $this->xmlRootName = 'N08';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     * @throws \Exception
     */
    protected function handleResponse(array $response)
    {
        $lastItem = null;

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);
            N08Klij::updateOrCreate(['N08_KODAS_KS' => $item['N08_KODAS_KS']], $item);
        }

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N08_KODAS_KS>'" . $lastItem['N08_KODAS_KS'] . "'";
            $this->makeCall();
        }
    }
}