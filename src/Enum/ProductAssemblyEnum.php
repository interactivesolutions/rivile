<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ProductAssemblyEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ProductAssemblyEnum extends Enumerable
{
    /**
     * @return ProductAssemblyEnum|Enumerable
     */
    final public static function simple(): ProductAssemblyEnum
    {
        return self::make('1', trans('Rivile::rivile_products.enum.assembly.simple'));
    }

    /**
     * @return ProductAssemblyEnum|Enumerable
     */
    final public static function assembled(): ProductAssemblyEnum
    {
        return self::make('2', trans('Rivile::rivile_products.enum.assembly.assembled'));
    }

    /**
     * @return ProductAssemblyEnum|Enumerable
     */
    final public static function splitUp(): ProductAssemblyEnum
    {
        return self::make('3', trans('Rivile::rivile_products.enum.assembly.split_up'));
    }

    /**
     * @return ProductAssemblyEnum|Enumerable
     */
    final public static function generating(): ProductAssemblyEnum
    {
        return self::make('4', trans('Rivile::rivile_products.enum.assembly.generating'));
    }

    /**
     * @return ProductAssemblyEnum|Enumerable
     */
    final public static function ingredient(): ProductAssemblyEnum
    {
        return self::make('5', trans('Rivile::rivile_products.enum.assembly.ingredient'));
    }
}
