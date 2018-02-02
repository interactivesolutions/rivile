<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\N13Akc;

/**
 * Class N13AkcRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N13AkcRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N13Akc::class;
    }
}
