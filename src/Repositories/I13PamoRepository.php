<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I13Pamo;

/**
 * Class I13PamoRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I13PamoRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I13Pamo::class;
    }
}
