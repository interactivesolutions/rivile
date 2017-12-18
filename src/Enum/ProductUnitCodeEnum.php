<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ProductUnitCodeEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ProductUnitCodeEnum extends Enumerable
{
    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function kilo(): ProductUnitCodeEnum
    {
        return self::make('KG', trans('Rivile::rivile_products.enum.unit_code.kg'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function liter(): ProductUnitCodeEnum
    {
        return self::make('L', trans('Rivile::rivile_products.enum.unit_code.l'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function meter(): ProductUnitCodeEnum
    {
        return self::make('M', trans('Rivile::rivile_products.enum.unit_code.m'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function meter0(): ProductUnitCodeEnum
    {
        return self::make('M(0.000)', trans('Rivile::rivile_products.enum.unit_code.m0'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function meter2(): ProductUnitCodeEnum
    {
        return self::make('M*2', trans('Rivile::rivile_products.enum.unit_code.m2'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function meter3(): ProductUnitCodeEnum
    {

        return self::make('M*3', trans('Rivile::rivile_products.enum.unit_code.m3'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function val(): ProductUnitCodeEnum
    {
        return self::make('VAL', trans('Rivile::rivile_products.enum.unit_code.val'));
    }

    /**
     * @return ProductUnitCodeEnum|Enumerable
     */
    final public static function vnt(): ProductUnitCodeEnum
    {
        return self::make('VNT', trans('Rivile::rivile_products.enum.unit_code.vnt'));
    }
}
