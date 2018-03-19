<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Repositories\I04AthRepository;
use InteractiveSolutions\Rivile\Repositories\I05AtdRepository;

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
     * @var I04AthRepository
     */
    private $athRepository;
    /**
     * @var I05AtdRepository
     */
    private $atdRepository;

    /**
     * UpdatePayments constructor.
     * @param I04AthRepository $athRepository
     * @param I05AtdRepository $atdRepository
     */
    public function __construct(I04AthRepository $athRepository, I05AtdRepository $atdRepository)
    {
        parent::__construct();

        $this->athRepository = $athRepository;
        $this->atdRepository = $atdRepository;
    }

    /**
     * Initializing data
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function init()
    {
        $latItem = $this->athRepository->makeQuery()->orderBy('I04_R_DATE', 'desc')->get()[0]->I04_R_DATE;

        $this->listType = 'A';
        $this->filters = "I04_R_DATE>'$latItem'";
        $this->action = 'I04';
        $this->xmlRootName = 'I04';
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
            $this->athRepository->updateOrCreate([
                'I04_KODAS_CH' => $item['I04_KODAS_CH'],
            ], $item);

            $this->saveI05(array_get($item, 'I05'));
        }

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I04_R_DATE>'" . $lastItem['I04_R_DATE'] . "'";
            $this->makeCall();
        }
    }

    /**
     * @param array|null $data
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    private function saveI05(array $data = null)
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->atdRepository->updateOrCreate([
                'I05_KODAS_CH' => $item['I05_KODAS_CH'],
                'I05_EIL_NR' => $item['I05_EIL_NR'],
            ], $item);
        }
    }
}
