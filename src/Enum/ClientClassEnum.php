<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ClientClassEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ClientClassEnum extends Enumerable
{
    /**
     * @return ClientClassEnum|Enumerable
     */
    final public static function document(): ClientClassEnum
    {
        return self::make('1', trans('Rivile::rivile_clients.enum.class.document'));
    }

    /**
     * @return ClientClassEnum|Enumerable
     */
    final public static function account(): ClientClassEnum
    {
        return self::make('2', trans('Rivile::rivile_clients.enum.class.account'));
    }
}
