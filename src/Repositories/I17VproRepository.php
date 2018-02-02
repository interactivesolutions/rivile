<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I17Vpro;

/**
 * Class I17VproRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I17VproRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I17Vpro::class;
    }
}
