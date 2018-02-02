<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N26Komp;

/**
 * Class N26KompRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N26KompRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N26Komp::class;
    }
}
