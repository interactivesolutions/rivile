<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use Illuminate\Support\Collection;
use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I07Pard;

/**
 * Class I07PardRepository
 * @package InteractiveSolutions\Rivile\Repositories
 */
class I07PardRepository extends Repository
{

    /**
     * @return string
     */
    public function model(): string
    {
        return I07Pard::class;
    }

    /**
     * @param string $kodasPo
     * @return Collection
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getByKodasPo(string $kodasPo): Collection
    {
        return $this->makeQuery()
            ->where('I07_KODAS_PO', '=', $kodasPo)
            ->get();
    }
}
