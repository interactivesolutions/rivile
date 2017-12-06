<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\ClientsImportEvent;
use InteractiveSolutions\Rivile\Models\N08Klij;
use InteractiveSolutions\Rivile\Repositories\N08KlijRepository;

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
     * @var N08KlijRepository
     */
    private $n08KlijRepository;

    /**
     * ImportClients constructor.
     * @param N08KlijRepository $n08KlijRepository
     */
    public function __construct(N08KlijRepository $n08KlijRepository)
    {
        $this->n08KlijRepository = $n08KlijRepository;

        parent::__construct();
    }

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = null;

        // todo: refactor to listType = A
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
        // todo: remove before life run and check by POZ_DATE!!!
        $ignoreCompanyCodes = $this->getIgnoreList();

        $lastItem = null;
        $n08Ids = [];

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);

            if (in_array($item['N08_IM_KODAS'], $ignoreCompanyCodes)) {
                continue;
            }

            /** @var N08Klij $client */
            $client = $this->n08KlijRepository->updateOrCreate(
                ['N08_KODAS_KS' => $item['N08_KODAS_KS']],
                $item
            );

            // todo: save N33

            $n08Ids[] = $client->id;
        }

        event(new ClientsImportEvent($n08Ids));

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N08_KODAS_KS>'" . $lastItem['N08_KODAS_KS'] . "'";
            $this->makeCall();
        }
    }

    private function getIgnoreList(): array
    {
        return [
            '25513443',
        ];
    }


}