<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Services;

use InteractiveSolutions\Rivile\Repositories\I06ParhRepository;

/**
 * Class I06ParhService
 * @package InteractiveSolutions\Rivile\Services
 */
class I06ParhService
{
    /**
     * @var I06ParhRepository
     */
    private $i06ParhRepository;
    private $orderNumberPrefix;

    /**
     * I06ParhService constructor.
     * @param I06ParhRepository $i06ParhRepository
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    public function __construct(I06ParhRepository $i06ParhRepository)
    {
        $this->i06ParhRepository = $i06ParhRepository;

        $this->orderNumberPrefix = config('rivile.order_number_prefix');
    }

    /**
     * @return string
     * @throws \Illuminate\Container\EntryNotFoundException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getNextKodasKs(): string
    {
        $lastKodasKs = $this->i06ParhRepository->getLastFieldNumber('I06_KODAS_KS');

        if ($lastKodasKs) {
            $lastKodasKs = (int)substr($lastKodasKs, strlen($this->orderNumberPrefix));
        }

        $lastKodasKs = (int)$lastKodasKs + 1;

        return sprintf(
            '%s%s',
            $this->orderNumberPrefix,
            str_pad(
                (string)(int)$lastKodasKs,
                12 - strlen($this->orderNumberPrefix),
                '0',
                STR_PAD_LEFT
            )
        );
    }

    /**
     * @return string
     * @throws \Illuminate\Container\EntryNotFoundException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getNextOrderNumber(): string
    {
        $lastNumber = $this->i06ParhRepository->getLastFieldNumber();

        if ($lastNumber) {
            $lastNumber = (int)substr($lastNumber, strlen($this->orderNumberPrefix));
        }

        $lastNumber = (int)$lastNumber + 1;

        return sprintf(
            '%s%s',
            $this->orderNumberPrefix,
            str_pad(
                (string)(int)$lastNumber,
                12 - strlen($this->orderNumberPrefix),
                '0',
                STR_PAD_LEFT
            )
        );
    }
}
