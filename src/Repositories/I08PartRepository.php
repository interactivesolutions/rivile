<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I08Part;

/**
 * Class I08PartRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I08PartRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I08Part::class;
    }
}