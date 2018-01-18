<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Events;

/**
 * Class OrdersUpdateEvent
 * @package InteractiveSolutions\Rivile\Events
 */
class OrdersUpdateEvent
{
    /**
     * @var array
     */
    private $i06Ids;

    /**
     * ClientsImportEvent constructor.
     * @param array $i06Ids
     */
    public function __construct(array $i06Ids)
    {
        $this->i06Ids = $i06Ids;
    }

    /**
     * @return array
     */
    public function getI06Ids(): array
    {
        return $this->i06Ids;
    }
}
