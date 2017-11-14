<?php

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\N17Prod;

class ImportProducts extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N17_LIST - Import';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = N17Prod::orderBy('created_at', 'desc')->first();

        $this->listType = 'H';
        $this->filters = "N17_KODAS_PS>'$latItem'";
        $this->action = 'N17';
        $this->xmlRootName = 'n17_prod';
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
            N17Prod::updateOrCreate(['N17_KODAS_PS' => $item['N17_KODAS_PS']], $item);
        }

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N17_KODAS_PS>'" . $lastItem['N17_KODAS_PS'] . "'";
            $this->makeCall();
        }
    }
}