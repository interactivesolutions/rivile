<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I33Pkai;

/**
 * Class I33PkaiRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I33PkaiRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I33Pkai::class;
    }
}