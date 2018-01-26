<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\ClientsUpdateEvent;
use InteractiveSolutions\Rivile\Models\N08Klij;
use InteractiveSolutions\Rivile\Repositories\N08KlijRepository;
use InteractiveSolutions\Rivile\Repositories\N33KbanRepository;

/**
 * Class UpdateClients
 * @package InteractiveSolutions\Rivile\Console\Commands\Update
 */
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
     * @var N08KlijRepository
     */
    private $n08KlijRepository;
    /**
     * @var N33KbanRepository
     */
    private $n33KbanRepository;

    /**
     * ImportClients constructor.
     * @param N08KlijRepository $n08KlijRepository
     * @param N33KbanRepository $n33KbanRepository
     */
    public function __construct(N08KlijRepository $n08KlijRepository, N33KbanRepository $n33KbanRepository)
    {
        $this->n08KlijRepository = $n08KlijRepository;
        $this->n33KbanRepository = $n33KbanRepository;

        parent::__construct();
    }

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = N08Klij::orderBy('N08_R_DATE', 'desc')->first()->N08_R_DATE;

        $this->listType = 'A';
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
            $client = $this->n08KlijRepository->updateOrCreate(
                ['N08_KODAS_KS' => $item['N08_KODAS_KS']],
                $item
            );

            $this->saveN33(array_get($item, 'N33'));

            $n08Ids[] = $client->id;
        }

        event(new ClientsUpdateEvent($n08Ids));

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N08_R_DATE>'" . $lastItem['N08_R_DATE'] . "'";
            $this->makeCall();
        }
    }

    /**
     * @param array|null $data
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    private function saveN33(array $data = null): void
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->n33KbanRepository->updateOrCreate([
                'N33_KODAS_KS' => $item['N33_KODAS_KS'],
                'N33_EIL_NR' => $item['N33_EIL_NR'],
            ], $item);
        }
    }
}
