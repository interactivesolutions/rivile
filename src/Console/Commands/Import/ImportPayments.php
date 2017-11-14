<?php

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\I04Ath;

class ImportPayments extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I04_LIST - Import';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = I04Ath::orderBy('created_at', 'desc')->first();

        $this->listType = 'H';
        $this->filters = "I04_KODAS_CH>'$latItem'";
        $this->action = 'I04';
        $this->xmlRootName = 'i04_ath';
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
            I04Ath::updateOrCreate(['I04_KODAS_CH' => $item['I04_KODAS_CH']], $item);
        }

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I04_KODAS_CH>'" . $lastItem['I04_KODAS_CH'] . "'";
            $this->makeCall();
        }
    }
}