<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ProductTaxEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ProductTaxEnum extends Enumerable
{
    /**
     * @return ProductTaxEnum|Enumerable
     */
    final public static function noTax(): ProductTaxEnum
    {
        return self::make('0', trans('Rivile::rivile_products.enum.tax.no'));
    }

    /**
     * @return ProductTaxEnum|Enumerable
     */
    final public static function aTax(): ProductTaxEnum
    {
        return self::make('1', trans('Rivile::rivile_products.enum.tax.a'));
    }

    /**
     * @return ProductTaxEnum|Enumerable
     */
    final public static function bTax(): ProductTaxEnum
    {
        return self::make('2', trans('Rivile::rivile_products.enum.tax.b'));
    }

    /**
     * @return ProductTaxEnum|Enumerable
     */
    final public static function cTax(): ProductTaxEnum
    {
        return self::make('3', trans('Rivile::rivile_products.enum.tax.c'));
    }

    /**
     * @return ProductTaxEnum|Enumerable
     */
    final public static function dTax(): ProductTaxEnum
    {
        return self::make('4', trans('Rivile::rivile_products.enum.tax.d'));
    }
}
