<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;

use Illuminate\Support\Collection;
use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I06Parh;

/**
 * Class I06ParhRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I06ParhRepository extends Repository
{
    /**
     * @return string
     */
    public function model(): string
    {
        return I06Parh::class;
    }

    /**
     * @param array $whereValues
     * @param string $whereField
     * @param array $columns
     * @return Collection
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getOrdersWhereIn(
        array $whereValues = [],
        string $whereField = 'id',
        array $columns = ['*']
    ): Collection {
        return $this->makeQuery()
            ->select($columns)
            ->whereIn($whereField, $whereValues)
            ->get();
    }

    /**
     * @param string $field
     * @return null|string
     * @throws \Illuminate\Container\EntryNotFoundException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getLastFieldNumber(string $field = 'I06_DOK_NR'): ? string
    {
        return $this->makeQuery()
            ->where($field, 'LIKE', config('rivile.order_number_prefix'). '%')
            ->orderByDesc($field)->limit(1)->value($field);
    }
}
