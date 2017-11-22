<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;

use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\N17Prod;

/**
 * Class N17ProdRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N17ProdRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N17Prod::class;
    }

    /**
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getLastRDate()
    {
        return $this->makeQuery()
            ->orderBy('N17_R_DATE', 'desc')
            ->value('N17_R_DATE');
    }
}