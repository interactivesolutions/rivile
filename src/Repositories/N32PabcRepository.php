<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N32Pabc;

/**
 * Class N32PabcRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N32PabcRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N32Pabc::class;
    }
}
