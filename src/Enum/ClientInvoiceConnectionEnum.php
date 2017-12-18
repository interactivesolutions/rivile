<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Enum;

use InteractiveSolutions\HoneycombCore\Enum\Enumerable;

/**
 * Class ClientInvoiceConnectionEnum
 * @package InteractiveSolutions\Rivile\Enum
 */
class ClientInvoiceConnectionEnum extends Enumerable
{
    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt001(): ClientInvoiceConnectionEnum
    {
        return self::make('PT001', trans('Rivile::rivile_clients.enum.invoice.pt001'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt002(): ClientInvoiceConnectionEnum
    {
        return self::make('PT002', trans('Rivile::rivile_clients.enum.invoice.pt002'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt003(): ClientInvoiceConnectionEnum
    {
        return self::make('PT003', trans('Rivile::rivile_clients.enum.invoice.pt003'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt004(): ClientInvoiceConnectionEnum
    {
        return self::make('PT004', trans('Rivile::rivile_clients.enum.invoice.pt004'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt005(): ClientInvoiceConnectionEnum
    {
        return self::make('PT005', trans('Rivile::rivile_clients.enum.invoice.pt005'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt006(): ClientInvoiceConnectionEnum
    {
        return self::make('PT006', trans('Rivile::rivile_clients.enum.invoice.pt006'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt007(): ClientInvoiceConnectionEnum
    {
        return self::make('PT007', trans('Rivile::rivile_clients.enum.invoice.pt007'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt008(): ClientInvoiceConnectionEnum
    {
        return self::make('PT008', trans('Rivile::rivile_clients.enum.invoice.pt008'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt009(): ClientInvoiceConnectionEnum
    {
        return self::make('PT009', trans('Rivile::rivile_clients.enum.invoice.pt009'));
    }

    /**
     * @return ClientInvoiceConnectionEnum|Enumerable
     */
    final public static function pt010(): ClientInvoiceConnectionEnum
    {
        return self::make('PT010', trans('Rivile::rivile_clients.enum.invoice.pt010'));
    }
}
