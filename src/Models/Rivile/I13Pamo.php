<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I13Pamo
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I13_KODAS_PO Operacijos numeris
 * @property int|null $I13_EIL_NR Eil. numeris
 * @property string|null $I13_KODAS_SS Sąskaita
 * @property float|null $I13_SUMA Suma
 * @property float|null $I13_SUMA_VAL Suma valiuta
 * @property string|null $I13_PAV Pavadinimas
 * @property string|null $I13_ADDUSR Kas sukūrė
 * @property string|null $I13_USERIS Kas koregavo
 * @property string|null $I13_R_DATE Koregavimo data
 * @method static Builder|I13Pamo whereCount($value)
 * @method static Builder|I13Pamo whereCreatedAt($value)
 * @method static Builder|I13Pamo whereDeletedAt($value)
 * @method static Builder|I13Pamo whereI13ADDUSR($value)
 * @method static Builder|I13Pamo whereI13EILNR($value)
 * @method static Builder|I13Pamo whereI13KODASPO($value)
 * @method static Builder|I13Pamo whereI13KODASSS($value)
 * @method static Builder|I13Pamo whereI13PAV($value)
 * @method static Builder|I13Pamo whereI13RDATE($value)
 * @method static Builder|I13Pamo whereI13SUMA($value)
 * @method static Builder|I13Pamo whereI13SUMAVAL($value)
 * @method static Builder|I13Pamo whereI13USERIS($value)
 * @method static Builder|I13Pamo whereId($value)
 * @method static Builder|I13Pamo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I13Pamo extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I13_PAMO';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I13_KODAS_PO',
        'I13_EIL_NR',
        'I13_KODAS_SS',
        'I13_SUMA',
        'I13_SUMA_VAL',
        'I13_PAV',
        'I13_ADDUSR',
        'I13_USERIS',
        'I13_R_DATE',
    ];

}
