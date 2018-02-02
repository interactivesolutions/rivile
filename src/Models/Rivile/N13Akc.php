<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N13Akc
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N13_KODAS_PS Prekės kodas
 * @property string|null $N13_KODAS_US Mat.vnt.
 * @property string|null $N13_KODAS_IS Padalinys
 * @property int|null $N13_EIL_NR Eilutės nr.
 * @property string|null $N13_DATE_PR Pradžios data
 * @property string|null $N13_DATE_PB Pabaigos data
 * @property string|null $N13_PAV Aprašymas
 * @property int|null $N13_POZ_KAINA Kainos parinkimas: 0-ne; 1-taip
 * @property float|null $N13_KAINA1 Kaina1
 * @property int|null $N13_KIEKIS2K Kainos kiekis2
 * @property float|null $N13_KAINA2 Kaina2
 * @property int|null $N13_KIEKIS3K Kainos kiekis3
 * @property float|null $N13_KAINA3 Kaina3
 * @property int|null $N13_KIEKIS4K Kainos kiekis4
 * @property float|null $N13_KAINA4 Kaina4
 * @property int|null $N13_POZ_NUOLAIDA Nuolaidos parinkimas: 0-ne; 1-taip.
 * @property float|null $N13_NUOLAIDA1 Nuolaida1
 * @property int|null $N13_KIEKIS2N Nuolaidos kiekis2
 * @property float|null $N13_NUOLAIDA2 Nuolaida2
 * @property int|null $N13_KIEKIS3N Nuolaidos kiekis3
 * @property float|null $N13_NUOLAIDA3 Nuolaida3
 * @property int|null $N13_KIEKIS4N Nuolaidos kiekis4
 * @property float|null $N13_NUOLAIDA4 Nuolaida4
 * @property string|null $N13_KODAS_LS_1 Logistika 1
 * @property string|null $N13_KODAS_LS_2 Logistika 2
 * @property string|null $N13_KODAS_LS_3 Logistika 3
 * @property string|null $N13_KODAS_LS_4 Logistika 4
 * @property string|null $N13_ADDUSR Kas sukūrė
 * @property string|null $N13_USERIS Kas koregavo
 * @property string|null $N13_R_DATE Kada koregavo
 * @property string|null $N13_REZERVAS Rezervas
 * @method static Builder|N13Akc whereCount($value)
 * @method static Builder|N13Akc whereCreatedAt($value)
 * @method static Builder|N13Akc whereDeletedAt($value)
 * @method static Builder|N13Akc whereId($value)
 * @method static Builder|N13Akc whereN13ADDUSR($value)
 * @method static Builder|N13Akc whereN13DATEPB($value)
 * @method static Builder|N13Akc whereN13DATEPR($value)
 * @method static Builder|N13Akc whereN13EILNR($value)
 * @method static Builder|N13Akc whereN13KAINA1($value)
 * @method static Builder|N13Akc whereN13KAINA2($value)
 * @method static Builder|N13Akc whereN13KAINA3($value)
 * @method static Builder|N13Akc whereN13KAINA4($value)
 * @method static Builder|N13Akc whereN13KIEKIS2K($value)
 * @method static Builder|N13Akc whereN13KIEKIS2N($value)
 * @method static Builder|N13Akc whereN13KIEKIS3K($value)
 * @method static Builder|N13Akc whereN13KIEKIS3N($value)
 * @method static Builder|N13Akc whereN13KIEKIS4K($value)
 * @method static Builder|N13Akc whereN13KIEKIS4N($value)
 * @method static Builder|N13Akc whereN13KODASIS($value)
 * @method static Builder|N13Akc whereN13KODASLS1($value)
 * @method static Builder|N13Akc whereN13KODASLS2($value)
 * @method static Builder|N13Akc whereN13KODASLS3($value)
 * @method static Builder|N13Akc whereN13KODASLS4($value)
 * @method static Builder|N13Akc whereN13KODASPS($value)
 * @method static Builder|N13Akc whereN13KODASUS($value)
 * @method static Builder|N13Akc whereN13NUOLAIDA1($value)
 * @method static Builder|N13Akc whereN13NUOLAIDA2($value)
 * @method static Builder|N13Akc whereN13NUOLAIDA3($value)
 * @method static Builder|N13Akc whereN13NUOLAIDA4($value)
 * @method static Builder|N13Akc whereN13PAV($value)
 * @method static Builder|N13Akc whereN13POZKAINA($value)
 * @method static Builder|N13Akc whereN13POZNUOLAIDA($value)
 * @method static Builder|N13Akc whereN13RDATE($value)
 * @method static Builder|N13Akc whereN13REZERVAS($value)
 * @method static Builder|N13Akc whereN13USERIS($value)
 * @method static Builder|N13Akc whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N13Akc extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N13_AKC';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N13_KODAS_PS',
        'N13_KODAS_US',
        'N13_KODAS_IS',
        'N13_EIL_NR',
        'N13_DATE_PR',
        'N13_DATE_PB',
        'N13_PAV',
        'N13_POZ_KAINA',
        'N13_KAINA1',
        'N13_KIEKIS2K',
        'N13_KAINA2',
        'N13_KIEKIS3K',
        'N13_KAINA3',
        'N13_KIEKIS4K',
        'N13_KAINA4',
        'N13_POZ_NUOLAIDA',
        'N13_NUOLAIDA1',
        'N13_KIEKIS2N',
        'N13_NUOLAIDA2',
        'N13_KIEKIS3N',
        'N13_NUOLAIDA3',
        'N13_KIEKIS4N',
        'N13_NUOLAIDA4',
        'N13_KODAS_LS_1',
        'N13_KODAS_LS_2',
        'N13_KODAS_LS_3',
        'N13_KODAS_LS_4',
        'N13_ADDUSR',
        'N13_USERIS',
        'N13_R_DATE',
        'N13_REZERVAS',
    ];

}
