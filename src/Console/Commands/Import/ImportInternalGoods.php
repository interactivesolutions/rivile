<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\Rivile\I17Vpro;

/**
 * Class ImportInternalGoods
 * @package InteractiveSolutions\Rivile\Console\Commands\Import
 */
class ImportInternalGoods extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-internal-goods';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I17_LIST - Import';

    /**
     * Initializing data
     */
    protected function init()
    {
        $lastItem = I17Vpro::orderBy('created_at', 'desc')->first();

        $this->listType = '';
        $this->filters = "I17_KODAS_PS>'$lastItem'";
        $this->action = 'I17';
        $this->xmlRootName = 'I17';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     * @throws \Exception
     */
    protected function handleResponse(array $response)
    {
        $lastItem = null;

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);
            I17Vpro::updateOrCreate([
                'I17_KODAS_PS' => $item['I17_KODAS_PS'],
                'I17_KODAS_IS' => $item['I17_KODAS_IS'],
                'I17_KODAS_US_A' => $item['I17_KODAS_US_A'],
                'I17_KODAS_OS' => $item['I17_KODAS_OS'],
                'I17_SERIJA' => $item['I17_SERIJA'],
            ], $item);
        }

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I17_KODAS_PS>='" . $lastItem['I17_KODAS_PS'] . "'";
            $this->makeCall();
        }
    }
}
