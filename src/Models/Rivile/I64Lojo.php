<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I64Lojo
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I64_KODAS_DR Operacijos Nr.
 * @property int|null $I64_EIL_NR Eilutės numeris(unikalumui)
 * @property string|null $I64_KODAS_DL Lojalumo kortelė
 * @property string|null $I64_KODAS_WW POS operacijos Nr.
 * @property string|null $I64_OP_DATE Operacijos data
 * @property string|null $I64_PAV Aprašymas
 * @property int|null $I64_TASKAI Taškai
 * @property int|null $I64_TIPAS Tipas: 1-taškai,2-apmokėjimas,3-prekė
 * @property string|null $I64_KODAS_PS Prekė/Sąskaita
 * @property float|null $I64_SUMA Suma
 * @property string|null $I64_ADDUSR Įrašo autorius
 * @property string|null $I64_USERIS Kas koregavo
 * @property string|null $I64_R_DATE Kada koregavo
 * @property string|null $I64_KODAS_US Matavimo vienetas
 * @property string|null $I64_KODAS_IS Padalinys
 * @property string|null $I64_REZERVAS1 Rezervas 1
 * @property string|null $I64_REZERVAS2 Rezervas 2
 * @property string|null $I64_REZERVAS3 Rezervas 3
 * @property string|null $I64_KODAS_DL_A Alternatyvus lojalumo kodas
 * @property string|null $I64_ID_PAR Parduotuvės Id.
 * @property string|null $I64_ID_POS POS id.
 * @property string|null $I64_KORTELES_ID Kortelės Nr.
 * @method static Builder|I64Lojo whereCount($value)
 * @method static Builder|I64Lojo whereCreatedAt($value)
 * @method static Builder|I64Lojo whereDeletedAt($value)
 * @method static Builder|I64Lojo whereI64ADDUSR($value)
 * @method static Builder|I64Lojo whereI64EILNR($value)
 * @method static Builder|I64Lojo whereI64IDPAR($value)
 * @method static Builder|I64Lojo whereI64IDPOS($value)
 * @method static Builder|I64Lojo whereI64KODASDL($value)
 * @method static Builder|I64Lojo whereI64KODASDLA($value)
 * @method static Builder|I64Lojo whereI64KODASDR($value)
 * @method static Builder|I64Lojo whereI64KODASIS($value)
 * @method static Builder|I64Lojo whereI64KODASPS($value)
 * @method static Builder|I64Lojo whereI64KODASUS($value)
 * @method static Builder|I64Lojo whereI64KODASWW($value)
 * @method static Builder|I64Lojo whereI64KORTELESID($value)
 * @method static Builder|I64Lojo whereI64OPDATE($value)
 * @method static Builder|I64Lojo whereI64PAV($value)
 * @method static Builder|I64Lojo whereI64RDATE($value)
 * @method static Builder|I64Lojo whereI64REZERVAS1($value)
 * @method static Builder|I64Lojo whereI64REZERVAS2($value)
 * @method static Builder|I64Lojo whereI64REZERVAS3($value)
 * @method static Builder|I64Lojo whereI64SUMA($value)
 * @method static Builder|I64Lojo whereI64TASKAI($value)
 * @method static Builder|I64Lojo whereI64TIPAS($value)
 * @method static Builder|I64Lojo whereI64USERIS($value)
 * @method static Builder|I64Lojo whereId($value)
 * @method static Builder|I64Lojo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I64Lojo extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I64_LOJO';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I64_KODAS_DR',
        'I64_EIL_NR',
        'I64_KODAS_DL',
        'I64_KODAS_WW',
        'I64_OP_DATE',
        'I64_PAV',
        'I64_TASKAI',
        'I64_TIPAS',
        'I64_KODAS_PS',
        'I64_SUMA',
        'I64_ADDUSR',
        'I64_USERIS',
        'I64_R_DATE',
        'I64_KODAS_US',
        'I64_KODAS_IS',
        'I64_REZERVAS1',
        'I64_REZERVAS2',
        'I64_REZERVAS3',
        'I64_KODAS_DL_A',
        'I64_ID_PAR',
        'I64_ID_POS',
        'I64_KORTELES_ID',
    ];

}
