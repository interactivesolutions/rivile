<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\I44Skol;

/**
 * Class UpdateDept
 * @package InteractiveSolutions\Rivile\Console\Commands\Update
 */
class UpdateDept extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:update-dept';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I44_LIST - Update clients list';

    /**
     * Initializing data
     */
    protected function init()
    {
        $lastItem = I44Skol::orderBy('I44_R_DATE', 'desc')->get()[1]->I44_R_DATE;

        $this->listType = 'A';
        $this->filters = "I44_R_DATE>'$lastItem'";
        $this->action = 'I44';
        $this->xmlRootName = 'I44';
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
            $lastItem = $item = array_change_key_case($item, CASE_UPPER);

            $this->clearEmptySpaces($item);
            I44Skol::updateOrCreate(['I44_KODAS_OP' => $item['I44_KODAS_OP']], $item);
        }

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I44_R_DATE>'" . $lastItem['I44_R_DATE'] . "'";
            $this->makeCall();
        }
    }
}
