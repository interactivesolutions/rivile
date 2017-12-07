<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;

use Illuminate\Support\Collection;
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

    /**
     * @param array $whereInIds
     * @return Collection|N17Prod[]
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getProductsByIds(array $whereInIds): Collection
    {
        return $this->makeQuery()
            ->whereIn('id', $whereInIds)
            ->get();
    }
}