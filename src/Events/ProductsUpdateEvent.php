<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Events;


/**
 * Class ProductsUpdateEvent
 * @package InteractiveSolutions\Rivile\Events
 */
class ProductsUpdateEvent
{
    /**
     * @var array
     */
    private $n17ProdIds;

    /**
     * ProductsImportEvent constructor.
     * @param array $n17ProdIds
     */
    public function __construct(array $n17ProdIds)
    {
        $this->n17ProdIds = $n17ProdIds;
    }

    /**
     * @return array
     */
    public function getN17ProdIds(): array
    {
        return $this->n17ProdIds;
    }
}