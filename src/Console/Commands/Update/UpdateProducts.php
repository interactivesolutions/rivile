<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\ProductsUpdateEvent;
use InteractiveSolutions\Rivile\Models\Rivile\N17Prod;
use InteractiveSolutions\Rivile\Repositories\I33PkaiRepository;
use InteractiveSolutions\Rivile\Repositories\N17ProdRepository;
use InteractiveSolutions\Rivile\Repositories\N37PmatRepository;

/**
 * Class UpdateProducts
 * @package InteractiveSolutions\Rivile\Console\Commands\Update
 */
class UpdateProducts extends RivileCore
{
    /**
     * @var N17ProdRepository
     */
    private $n17ProdRepository;
    /**
     * @var I33PkaiRepository
     */
    private $i33PkaiRepository;
    /**
     * @var N37PmatRepository
     */
    private $n37PmatRepository;
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
     * UpdateProducts constructor.
     * @param N17ProdRepository $n17ProdRepository
     * @param I33PkaiRepository $i33PkaiRepository
     * @param N37PmatRepository $n37PmatRepository
     */
    public function __construct(
        N17ProdRepository $n17ProdRepository,
        I33PkaiRepository $i33PkaiRepository,
        N37PmatRepository $n37PmatRepository
    ) {
        $this->n17ProdRepository = $n17ProdRepository;
        $this->i33PkaiRepository = $i33PkaiRepository;
        $this->n37PmatRepository = $n37PmatRepository;

        parent::__construct();
    }

    /**
     * Initializing data
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function init()
    {
        $latItem = $this->n17ProdRepository->getLastRDate();

        $this->listType = 'A';
        $this->filters = "N17_R_DATE>'$latItem'";
        $this->action = 'N17';

        $this->xmlRootName = 'N17';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     * @throws \Exception
     */
    protected function handleResponse(array $response)
    {
        $lastItem = null;
        $productsIds = [];

        if (!$response) {
            return;
        }

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);

            /** @var N17Prod $product */
            $product = $this->n17ProdRepository->updateOrCreate(['N17_KODAS_PS' => $item['N17_KODAS_PS']], $item);

            $productsIds[] = $product->id;

            $this->saveI33(array_get($item, 'I33'));
            $this->saveN37(array_get($item, 'N37'));
        }

        event(new ProductsUpdateEvent($productsIds));

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N17_R_DATE>'" . $lastItem['N17_R_DATE'] . "'";
            $this->makeCall();
        }
    }

    /**
     * @param array|null $data
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    private function saveI33(array $data = null)
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->i33PkaiRepository->updateOrCreate([
                'I33_KODAS_PS' => $item['I33_KODAS_PS'],
                'I33_KODAS_IS' => $item['I33_KODAS_IS'],
                'I33_KODAS_US' => $item['I33_KODAS_US'],
            ], $item);
        }
    }

    /**
     * @param array|null $data
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    private function saveN37(array $data = null)
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->n37PmatRepository->updateOrCreate([
                'N37_KODAS_PS' => $item['N37_KODAS_PS'],
                'N37_KODAS_US' => $item['N37_KODAS_US'],
            ], $item);
        }
    }
}
