<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I05Atd;

/**
 * Class I05AtdRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I05AtdRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I05Atd::class;
    }
}