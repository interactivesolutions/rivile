<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I09Vih;

/**
 * Class I09VihRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I09VihRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I09Vih::class;
    }
}