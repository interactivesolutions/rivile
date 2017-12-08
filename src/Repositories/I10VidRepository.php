<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\I10Vid;

/**
 * Class I10VidRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I10VidRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I10Vid::class;
    }
}