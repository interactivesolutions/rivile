<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\N40Abar;

/**
 * Class N40AbarRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N40AbarRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N40Abar::class;
    }
}