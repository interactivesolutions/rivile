<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ProductInvoiceConnectionEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ProductInvoiceConnectionEnum extends Enumerable
{
    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr000(): ProductInvoiceConnectionEnum
    {
        return self::make('PR000', trans('Rivile::rivile_products.enum.invoice.pr000'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr001(): ProductInvoiceConnectionEnum
    {
        return self::make('PR001', trans('Rivile::rivile_products.enum.invoice.pr001'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr002(): ProductInvoiceConnectionEnum
    {
        return self::make('PR002', trans('Rivile::rivile_products.enum.invoice.pr002'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr003(): ProductInvoiceConnectionEnum
    {
        return self::make('PR003', trans('Rivile::rivile_products.enum.invoice.pr003'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr004(): ProductInvoiceConnectionEnum
    {
        return self::make('PR004', trans('Rivile::rivile_products.enum.invoice.pr004'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr005(): ProductInvoiceConnectionEnum
    {
        return self::make('PR005', trans('Rivile::rivile_products.enum.invoice.pr005'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr006(): ProductInvoiceConnectionEnum
    {
        return self::make('PR006', trans('Rivile::rivile_products.enum.invoice.pr006'));
    }

    /**
     * @return ProductInvoiceConnectionEnum|Enumerable
     */
    final public static function pr007(): ProductInvoiceConnectionEnum
    {
        return self::make('PR007', trans('Rivile::rivile_products.enum.invoice.pr007'));
    }
}
