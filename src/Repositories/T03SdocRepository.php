<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\T03Sdok;

/**
 * Class T03SdocRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class T03SdocRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return T03Sdok::class;
    }
}
