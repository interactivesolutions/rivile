<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Repositories;


use Illuminate\Support\Collection;
use InteractiveSolutions\HoneycombCore\Repositories\Repository;
use InteractiveSolutions\Rivile\Models\Rivile\I08Part;

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

    /**
     * @param string $kodasPo
     * @return Collection
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function getByKodasPo(string $kodasPo): Collection
    {
        return $this->makeQuery()
            ->where('I08_KODAS_PO', '=', $kodasPo)
            ->get();
    }
}
