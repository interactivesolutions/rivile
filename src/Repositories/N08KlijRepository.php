<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use Illuminate\Support\Collection;
use InteractiveSolutions\HoneycombCore\Enum\BoolEnum;
use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\N08Klij;

/**
 * Class N08KlijRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class N08KlijRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return N08Klij::class;
    }

    /**
     * @param array $whereValues
     * @param string $whereField
     * @param array $columns
     * @return Collection
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function findNotTerminatedWhereIn(array $whereValues = [], string $whereField = 'id', array $columns = ['*']): Collection
    {
        return $this->makeQuery()->select($columns)
            ->where('N08_POZ_DATE', '=', (string)BoolEnum::no()->id())
            ->whereIn($whereField, $whereValues)->get();
    }
}