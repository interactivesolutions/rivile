<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\I04Ath;

/**
 * Class UpdatePayments
 * @package InteractiveSolutions\Rivile\Console\Commands\Update
 */
class UpdatePayments extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:update-payments';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I04_LIST - Update payments list';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = I04Ath::orderBy('I04_R_DATE', 'desc')->get()[1]->I04_R_DATE;

        $this->listType = 'H';
        $this->filters = "I04_R_DATE>'$latItem'";
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

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);
            I04Ath::updateOrCreate(['I04_KODAS_CH' => $item['I04_KODAS_CH']], $item);
        }

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I04_R_DATE>'" . $lastItem['I04_R_DATE'] . "'";
            $this->makeCall();
        }
    }
}
