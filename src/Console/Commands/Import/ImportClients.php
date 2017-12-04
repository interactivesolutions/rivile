<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\ClientsImportEvent;
use InteractiveSolutions\Rivile\Models\N08Klij;

/**
 * Class ImportClients
 * @package InteractiveSolutions\Rivile\Console\Commands\Import
 */
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
        $n08Ids = [];

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);

            /** @var N08Klij $client */
            $client = N08Klij::updateOrCreate(['N08_KODAS_KS' => $item['N08_KODAS_KS']], $item);
            $n08Ids[] = $client->id;
        }

        event(new ClientsImportEvent($n08Ids));

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N08_KODAS_KS>'" . $lastItem['N08_KODAS_KS'] . "'";
            $this->makeCall();
        }
    }
}