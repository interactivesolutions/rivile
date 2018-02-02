<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N31Nuod;

/**
 * Class N31NuodRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N31NuodRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N31Nuod::class;
    }
}
