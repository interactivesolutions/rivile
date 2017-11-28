<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;


use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\I17Vpro;

/**
 * Class UpdateInternalGoods
 * @package InteractiveSolutions\Rivile\Console\Commands\Update
 */
class UpdateInternalGoods extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:update-internal-goods';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I17_LIST - Update internal goods list';

    /**
     * Initializing data
     */
    protected function init()
    {
        $lastItem = I17Vpro::orderBy('I17_R_DATE', 'desc')->get()[0]->I17_R_DATE;

        $this->listType = '';
        $this->filters = "I17_R_DATE>'$lastItem'";
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

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I17_R_DATE>'" . $lastItem['I17_R_DATE'] . "'";
            $this->makeCall();
        }
    }
}