<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I04Ath;

/**
 * Class I04AthRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I04AthRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I04Ath::class;
    }
}
