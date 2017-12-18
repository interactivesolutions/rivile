<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ProductTypeEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ProductTypeEnum extends Enumerable
{
    /**
     * @return ProductTypeEnum|Enumerable
     */
    final public static function product(): ProductTypeEnum
    {
        return self::make('1', trans('Rivile::rivile_products.enum.type.product'));
    }

    /**
     * @return ProductTypeEnum|Enumerable
     */
    final public static function service(): ProductTypeEnum
    {
        return self::make('2', trans('Rivile::rivile_products.enum.type.service'));
    }
}
