<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I64Lojo;

/**
 * Class I64LojoRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I64LojoRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I64Lojo::class;
    }
}
