<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I44Skol;

/**
 * Class I44SkolRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I44SkolRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I44Skol::class;
    }
}