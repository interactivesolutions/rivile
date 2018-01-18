<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Events;

/**
 * Class ClientsImportEvent
 * @package InteractiveSolutions\Rivile\Events
 */
class ClientsImportEvent
{
    /**
     * @var array
     */
    private $n08Ids;

    /**
     * ClientsImportEvent constructor.
     * @param array $n08Ids
     */
    public function __construct(array $n08Ids)
    {
        $this->n08Ids = $n08Ids;
    }

    /**
     * @return array
     */
    public function getN08Ids(): array
    {
        return $this->n08Ids;
    }
}
