<?php namespace interactivesolutions\rivile\app\console\commands\update;

use interactivesolutions\rivile\app\console\commands\RivileCore;
use interactivesolutions\rivile\database\models\N17Prod;

class UpdateProducts extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:update-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N17_LIST - Update products list';

    /**
     * Initializing data
     */
    protected function init ()
    {
        $latItem = N17Prod::orderBy('N17_R_DATE', 'desc')->get()[1]->N17_R_DATE;

        $this->listType = 'H';
        $this->filters = "N17_R_DATE>'$latItem'";
        $this->action = 'N17';
        $this->xmlRootName = 'n17_prod';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     */
    protected function handleResponse(array $response)
    {
        $lastItem = null;

        if (!isset($response[0]))
            $response = [$response];

        foreach ($response as $item)
        {
            $lastItem = $item;
            $this->clearEmptySpaces($item);
            N17Prod::updateOrCreate(['N17_KODAS_PS' => $item['N17_KODAS_PS']], $item);
        }

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100)
        {
            $this->filters = "N17_R_DATE>'" . $lastItem['N17_R_DATE'] . "'";
            $this->makeCall();
        }
    }
}