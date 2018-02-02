<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N33Kban;

/**
 * Class N33KbanRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N33KbanRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N33Kban::class;
    }
}
