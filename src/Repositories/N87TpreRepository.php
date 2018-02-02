<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N87Tpre;

/**
 * Class N87TpreRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N87TpreRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N87Tpre::class;
    }
}
