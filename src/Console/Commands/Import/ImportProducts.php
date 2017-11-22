<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Import;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Models\I33Pkai;
use InteractiveSolutions\Rivile\Models\N17Prod;
use InteractiveSolutions\Rivile\Models\N37Pmat;

/**
 * Class ImportProducts
 * @package InteractiveSolutions\Rivile\Console\Commands\Import
 */
class ImportProducts extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:import-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_N17_LIST - Import';

    /**
     * Initializing data
     */
    protected function init()
    {
        $latItem = N17Prod::orderBy('created_at', 'desc')->first();

        $this->listType = 'A';
        $this->filters = "N17_KODAS_PS>'$latItem'";
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

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);
            N17Prod::updateOrCreate(['N17_KODAS_PS' => $item['N17_KODAS_PS']], $item);

            $this->saveI33(array_get($item, 'I33'));
            $this->saveN37(array_get($item, 'N37'));
        }

        $this->info('Added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "N17_KODAS_PS>'" . $lastItem['N17_KODAS_PS'] . "'";
            $this->makeCall();
        }
    }

    /**
     * @param array|null $data
     */
    private function saveI33(array $data = null)
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $key => $item) {
            I33Pkai::updateOrCreate([
                'I33_KODAS_PS' => $item['I33_KODAS_PS'],
                'I33_KODAS_IS' => $item['I33_KODAS_IS'],
                'I33_KODAS_US' => $item['I33_KODAS_US'],
            ], $item);
        }
    }

    /**
     * @param array|null $data
     */
    private function saveN37(array $data = null)
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $key => $item) {
            N37Pmat::updateOrCreate([
                'N37_KODAS_PS' => $item['N37_KODAS_PS'],
                'N37_KODAS_US' => $item['N37_KODAS_US'],
                'N37_BAR_KODAS' => $item['N37_BAR_KODAS'],
            ], $item);
        }
    }
}