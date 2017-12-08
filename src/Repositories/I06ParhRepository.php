<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I06Parh;

/**
 * Class I06ParhRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I06ParhRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I06Parh::class;
    }
}