<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N64Loj;

/**
 * Class N64LojRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N64LojRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N64Loj::class;
    }
}
