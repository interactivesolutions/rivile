<?php
declare(strict_types =1);

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\Rivile\I44Skol;

/**
 * Class ImportDept
 * @package InteractiveSolutions\Rivile\Console\Commands\Import
 */
class ImportDept extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-dept';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I44_LIST - Import';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = I44Skol::orderBy('created_at', 'desc')->first();

        $this->listType = 'A';
        $this->filters = "I44_KODAS_OP>'$latItem'";
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

        foreach ($response as $item) {
            $item = array_change_key_case($item, CASE_UPPER);

            $lastItem = $item;
            $this->clearEmptySpaces($item);
            I44Skol::updateOrCreate(['I44_KODAS_OP' => $item['I44_KODAS_OP']], $item);
        }

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I44_KODAS_OP>'" . $lastItem['I44_KODAS_OP'] . "'";
            $this->makeCall();
        }
    }
}
