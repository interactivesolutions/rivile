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

    /**
     * I06ParhService constructor.
     * @param I06ParhRepository $i06ParhRepository
     */
    public function __construct(I06ParhRepository $i06ParhRepository)
    {
        $this->i06ParhRepository = $i06ParhRepository;
    }

    /**
     * @return string
     * @throws \Illuminate\Container\EntryNotFoundException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getNextOrderNumber(): string
    {
        $orderNumberPrefix = config('rivile.order_number_prefix');
        $lastNumber = $this->i06ParhRepository->getLastDocumentNumber();

        if ($lastNumber) {
            $lastNumber = (int)substr($lastNumber, strlen($orderNumberPrefix));
        }

        $lastNumber = (int)$lastNumber + 1;

        return sprintf(
            '%s%s',
            $orderNumberPrefix,
            str_pad(
                (string)(int)$lastNumber,
                12 - strlen($orderNumberPrefix),
                '0',
                STR_PAD_LEFT
            )
        );
    }
}
