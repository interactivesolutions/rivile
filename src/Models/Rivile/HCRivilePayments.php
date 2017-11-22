<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\HCRivilePayments
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I04_KODAS_CH Operacijos numeris
 * @property string|null $I04_DOK_NR Dokumento numeris
 * @property int|null $I04_OP_RUSIS Rūšis:1-įplaukos,2-išmokos
 * @property int|null $I04_OP_TIPAS Reikalavimo požymis:0-ne,1-taip
 * @property int|null $I04_OP_STORNO Rezervas
 * @property string|null $I04_OP_DATA Operacijos data
 * @property string|null $I04_KODAS_SS Sąskaitos kodas
 * @property int|null $I04_MOKETOJAS Sudengimo tipas:1-dokumentai,2-sąskaitos
 * @property string|null $I04_KODAS_KS Kliento kodas
 * @property string|null $I04_PAV Kliento pavadinimas
 * @property string|null $I04_ADR Kliento adresas
 * @property string|null $I04_ATSTOVAS Atstovas
 * @property string|null $I04_KODAS_VS Vietovės kodas
 * @property float|null $I04_SUMA Operacijos suma
 * @property float|null $I04_SUMA_DSK Diskonto suma
 * @property float|null $I04_SUMA_PLK Palūkanų suma
 * @property string|null $I04_PASTABOS Pastabos
 * @property int|null $I04_PERKELTA Perkėlimo požymis:1-neperkelta,2-perkelta,3-koreguota
 * @property int|null $I04_IMP_EXP Rezervas
 * @property string|null $I04_KODAS_VL Valiutos kodas
 * @property float|null $I04_SUMA_VAL Valiutos suma
 * @property float|null $I04_KOEF Valiutos kursas
 * @property string|null $I04_USERIS Kas koregavo
 * @property string|null $I04_R_DATE Kada koregavo
 * @property string|null $I04_ADDUSR Kas sukūrė
 * @property string|null $I04_KODAS_SM Asmuo
 * @property string|null $I04_APRASYMAS Aprašymas
 * @property float|null $I04_SUMA_PER Valiutos perskaičiavimo suma
 * @property float|null $I04_SUMA_WK WB įsipareigojimų suma
 * @property string|null $I04_KODAS_LS_1 Logistika 1
 * @property string|null $I04_KODAS_LS_2 Logistika 2
 * @property string|null $I04_KODAS_LS_3 Logistika 3
 * @property string|null $I04_KODAS_LS_4 Logistika 4
 * @property string|null $I04_KODAS_ZN Zona
 * @property int|null $I04_BUSENA Būsena
 * @method static Builder|HCRivilePayments whereCount($value)
 * @method static Builder|HCRivilePayments whereCreatedAt($value)
 * @method static Builder|HCRivilePayments whereDeletedAt($value)
 * @method static Builder|HCRivilePayments whereI04ADDUSR($value)
 * @method static Builder|HCRivilePayments whereI04ADR($value)
 * @method static Builder|HCRivilePayments whereI04APRASYMAS($value)
 * @method static Builder|HCRivilePayments whereI04ATSTOVAS($value)
 * @method static Builder|HCRivilePayments whereI04BUSENA($value)
 * @method static Builder|HCRivilePayments whereI04DOKNR($value)
 * @method static Builder|HCRivilePayments whereI04IMPEXP($value)
 * @method static Builder|HCRivilePayments whereI04KODASCH($value)
 * @method static Builder|HCRivilePayments whereI04KODASKS($value)
 * @method static Builder|HCRivilePayments whereI04KODASLS1($value)
 * @method static Builder|HCRivilePayments whereI04KODASLS2($value)
 * @method static Builder|HCRivilePayments whereI04KODASLS3($value)
 * @method static Builder|HCRivilePayments whereI04KODASLS4($value)
 * @method static Builder|HCRivilePayments whereI04KODASSM($value)
 * @method static Builder|HCRivilePayments whereI04KODASSS($value)
 * @method static Builder|HCRivilePayments whereI04KODASVL($value)
 * @method static Builder|HCRivilePayments whereI04KODASVS($value)
 * @method static Builder|HCRivilePayments whereI04KODASZN($value)
 * @method static Builder|HCRivilePayments whereI04KOEF($value)
 * @method static Builder|HCRivilePayments whereI04MOKETOJAS($value)
 * @method static Builder|HCRivilePayments whereI04OPDATA($value)
 * @method static Builder|HCRivilePayments whereI04OPRUSIS($value)
 * @method static Builder|HCRivilePayments whereI04OPSTORNO($value)
 * @method static Builder|HCRivilePayments whereI04OPTIPAS($value)
 * @method static Builder|HCRivilePayments whereI04PASTABOS($value)
 * @method static Builder|HCRivilePayments whereI04PAV($value)
 * @method static Builder|HCRivilePayments whereI04PERKELTA($value)
 * @method static Builder|HCRivilePayments whereI04RDATE($value)
 * @method static Builder|HCRivilePayments whereI04SUMA($value)
 * @method static Builder|HCRivilePayments whereI04SUMADSK($value)
 * @method static Builder|HCRivilePayments whereI04SUMAPER($value)
 * @method static Builder|HCRivilePayments whereI04SUMAPLK($value)
 * @method static Builder|HCRivilePayments whereI04SUMAVAL($value)
 * @method static Builder|HCRivilePayments whereI04SUMAWK($value)
 * @method static Builder|HCRivilePayments whereI04USERIS($value)
 * @method static Builder|HCRivilePayments whereId($value)
 * @method static Builder|HCRivilePayments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HCRivilePayments extends HCUuidModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'I04_ATH';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'COUNT',
        'id',
        'I04_KODAS_CH',
        'I04_DOK_NR',
        'I04_OP_RUSIS',
        'I04_OP_TIPAS',
        'I04_OP_STORNO',
        'I04_OP_DATA',
        'I04_KODAS_SS',
        'I04_MOKETOJAS',
        'I04_KODAS_KS',
        'I04_PAV',
        'I04_ADR',
        'I04_ATSTOVAS',
        'I04_KODAS_VS',
        'I04_SUMA',
        'I04_SUMA_DSK',
        'I04_SUMA_PLK',
        'I04_PASTABOS',
        'I04_PERKELTA',
        'I04_IMP_EXP',
        'I04_KODAS_VL',
        'I04_SUMA_VAL',
        'I04_KOEF',
        'I04_USERIS',
        'I04_R_DATE',
        'I04_ADDUSR',
        'I04_KODAS_SM',
        'I04_APRASYMAS',
        'I04_SUMA_PER',
        'I04_SUMA_WK',
        'I04_KODAS_LS_1',
        'I04_KODAS_LS_2',
        'I04_KODAS_LS_3',
        'I04_KODAS_LS_4',
        'I04_KODAS_ZN',
        'I04_BUSENA',
    ];
}