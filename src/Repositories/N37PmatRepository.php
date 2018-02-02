<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N37Pmat;

/**
 * Class N37PmatRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N37PmatRepository extends Repository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return N37Pmat::class;
    }
}
