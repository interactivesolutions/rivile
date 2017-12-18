<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ClientTypeEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ClientTypeEnum extends Enumerable
{
    /**
     * @return ClientTypeEnum|Enumerable
     */
    final public static function customer(): ClientTypeEnum
    {
        return self::make('1', trans('Rivile::rivile_clients.enum.type.customer'));
    }

    /**
     * @return ClientTypeEnum|Enumerable
     */
    final public static function supplier(): ClientTypeEnum
    {
        return self::make('2', trans('Rivile::rivile_clients.enum.type.supplier'));
    }

    /**
     * @return ClientTypeEnum|Enumerable
     */
    final public static function customerSupplier(): ClientTypeEnum
    {
        return self::make('3', trans('Rivile::rivile_clients.enum.type.customer_supplier'));
    }

    /**
     * @return ClientTypeEnum|Enumerable
     */
    final public static function company(): ClientTypeEnum
    {
        return self::make('4', trans('Rivile::rivile_clients.enum.type.company'));
    }
}
