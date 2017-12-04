<?php

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\ClientsUpdateEvent;
use InteractiveSolutions\Rivile\Models\N08Klij;

class UpdateClients extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:update-clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N08_LIST - Update clients list';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = N08Klij::orderBy('N08_R_DATE', 'desc')->get()[1]->N08_R_DATE;

        $this->listType = 'H';
        $this->filters = "N08_R_DATE>'$latItem'";
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
        $n08Ids = [];

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);

            /** @var N08Klij $client */
            $client = N08Klij::updateOrCreate(['N08_KODAS_KS' => $item['N08_KODAS_KS']], $item);
            $n08Ids[] = $client->id;
        }

        event(new ClientsUpdateEvent($n08Ids));

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N08_R_DATE>'" . $lastItem['N08_R_DATE'] . "'";
            $this->makeCall();
        }
    }
}