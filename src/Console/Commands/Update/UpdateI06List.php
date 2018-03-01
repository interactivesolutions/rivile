<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Console\Commands\Update;

use Illuminate\Contracts\Container\BindingResolutionException;
use InteractiveSolutions\Rivile\Console\Commands\RivileCore;
use InteractiveSolutions\Rivile\Events\OrdersUpdateEvent;
use InteractiveSolutions\Rivile\Models\Rivile\I06Parh;
use InteractiveSolutions\Rivile\Repositories\I06ParhRepository;
use InteractiveSolutions\Rivile\Repositories\I07PardRepository;
use InteractiveSolutions\Rivile\Repositories\I08PartRepository;
use InteractiveSolutions\Rivile\Repositories\I13PamoRepository;

/**
 * Class UpdateI06List
 * @package InteractiveSolutions\Rivile\Console\Commands\Update
 */
class UpdateI06List extends RivileCore
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rivile:update-orders';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GET_I06_LIST - Update orders list';
    /**
     * @var I06ParhRepository
     */
    private $i06ParhRepository;
    /**
     * @var I07PardRepository
     */
    private $i07PardRepository;
    /**
     * @var I08PartRepository
     */
    private $i08PartRepository;
    /**
     * @var I13PamoRepository
     */
    private $i13PamoRepository;

    /**
     * UpdateI06List constructor.
     * @param I06ParhRepository $i06ParhRepository
     * @param I07PardRepository $i07PardRepository
     * @param I08PartRepository $i08PartRepository
     * @param I13PamoRepository $i13PamoRepository
     */
    public function __construct(
        I06ParhRepository $i06ParhRepository,
        I07PardRepository $i07PardRepository,
        I08PartRepository $i08PartRepository,
        I13PamoRepository $i13PamoRepository
    ) {
        $this->i06ParhRepository = $i06ParhRepository;
        $this->i07PardRepository = $i07PardRepository;
        $this->i08PartRepository = $i08PartRepository;
        $this->i13PamoRepository = $i13PamoRepository;

        parent::__construct();
    }

    /**
     * Initializing data
     */
    protected function init()
    {
        $lastItem = I06Parh::orderBy('I06_R_DATE', 'desc')->get()[0]->I06_R_DATE;

        $this->listType = 'A';
        $this->filters = "I06_R_DATE>'$lastItem'";
        $this->action = 'I06';
        $this->xmlRootName = 'I06';
        $this->actionMethod = self::ACTION_METHOD_GET;
    }

    /**
     * @param array $response
     * @throws BindingResolutionException
     * @throws \Exception
     */
    protected function handleResponse(array $response)
    {
        $lastItem = null;
        $i06Ids = [];

        if (!isset($response[0])) {
            $response = [$response];
        }

        foreach ($response as $item) {
            $lastItem = $item;
            $this->clearEmptySpaces($item);

            /** @var I06Parh $client */
            $client = $this->i06ParhRepository->updateOrCreate(
                ['I06_KODAS_PO' => $item['I06_KODAS_PO']],
                $item
            );

            $this->saveI07(array_get($item, 'I07'));
            $this->saveI08(array_get($item, 'I08'));
            $this->saveI13(array_get($item, 'I13'));

            $i06Ids[] = $client->id;
        }

        event(new OrdersUpdateEvent($i06Ids));

        $this->info('Updated / added: ' . sizeof($response));

        if (sizeof($response) == 100) {
            $this->filters = "I06_R_DATE>'" . $lastItem['I06_R_DATE'] . "'";
            $this->makeCall();
        }
    }

    /**
     * @param array|null $data
     * @throws BindingResolutionException
     */
    private function saveI07(array $data = null): void
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->i07PardRepository->updateOrCreate([
                'I07_KODAS_PO' => $item['I07_KODAS_PO'],
                'I07_EIL_NR' => $item['I07_EIL_NR'],
            ], $item);
        }
    }

    /**
     * @param array|null $data
     * @throws BindingResolutionException
     */
    private function saveI08(array $data = null): void
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->i08PartRepository->updateOrCreate([
                'I08_KODAS_PO' => $item['I08_KODAS_PO'],
                'I08_EIL_NR' => $item['I08_EIL_NR'],
            ], $item);
        }
    }

    /**
     * @param array|null $data
     * @throws BindingResolutionException
     */
    private function saveI13(array $data = null): void
    {
        if (!$data) {
            return;
        }

        if (!isset($data[0])) {
            $data = [$data];
        }

        foreach ($data as $item) {
            $this->i13PamoRepository->updateOrCreate([
                'I13_KODAS_PO' => $item['I13_KODAS_PO'],
                'I13_EIL_NR' => $item['I13_EIL_NR'],
            ], $item);
        }
    }
}
