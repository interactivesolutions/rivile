<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I09Vih
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I09_KODAS_VD Operacijos numeris
 * @property int|null $I09_TIPAS Dokumento tipas:1-važtaraštis,2-užsakymas
 * @property string|null $I09_DOK_NR Dokumento numeris
 * @property string|null $I09_IS_DATA Išvežimo data
 * @property int|null $I09_GAV_POZ Rezervas
 * @property string|null $I09_GAV_DATA Prekių gavimo data
 * @property string|null $I09_KODAS_IS1 Padalinio kodas iš kurio veža
 * @property string|null $I09_KODAS_SS_T Analitinės operacijos numeris
 * @property int|null $I09_NUTOL1 Padalinys iš kurio veža nutolęs?:0-ne,1-taip
 * @property string|null $I09_EIL1
 * @property string|null $I09_EIL2
 * @property string|null $I09_EIL3
 * @property string|null $I09_KODAS_IS2
 * @property int|null $I09_NUTOL2
 * @property string|null $I09_A_EIL1
 * @property string|null $I09_A_EIL2
 * @property string|null $I09_A_EIL3
 * @property int|null $I09_PERKELTA1
 * @property int|null $I09_PERKELTA2
 * @property int|null $I09_IMP_EXP
 * @property string|null $I09_USERIS
 * @property string|null $I09_R_DATE
 * @property string|null $I09_ADDUSR
 * @property float|null $I09_EIL_SK
 * @property string|null $I09_KODAS_SM1
 * @property string|null $I09_KODAS_SM2
 * @property string|null $I09_PAV
 * @property string|null $I09_KODAS_MS
 * @property string|null $I09_KODAS_LS_1
 * @property string|null $I09_KODAS_LS_2
 * @property string|null $I09_KODAS_LS_3
 * @property string|null $I09_KODAS_LS_4
 * @property string|null $I09_ADD_DATE
 * @property string|null $I09_PER1_DATE
 * @property string|null $I09_PER1_USER
 * @property string|null $I09_KODAS_AU
 * @method static Builder|I09Vih whereCount($value)
 * @method static Builder|I09Vih whereCreatedAt($value)
 * @method static Builder|I09Vih whereDeletedAt($value)
 * @method static Builder|I09Vih whereI09ADDDATE($value)
 * @method static Builder|I09Vih whereI09ADDUSR($value)
 * @method static Builder|I09Vih whereI09AEIL1($value)
 * @method static Builder|I09Vih whereI09AEIL2($value)
 * @method static Builder|I09Vih whereI09AEIL3($value)
 * @method static Builder|I09Vih whereI09DOKNR($value)
 * @method static Builder|I09Vih whereI09EIL1($value)
 * @method static Builder|I09Vih whereI09EIL2($value)
 * @method static Builder|I09Vih whereI09EIL3($value)
 * @method static Builder|I09Vih whereI09EILSK($value)
 * @method static Builder|I09Vih whereI09GAVDATA($value)
 * @method static Builder|I09Vih whereI09GAVPOZ($value)
 * @method static Builder|I09Vih whereI09IMPEXP($value)
 * @method static Builder|I09Vih whereI09ISDATA($value)
 * @method static Builder|I09Vih whereI09KODASAU($value)
 * @method static Builder|I09Vih whereI09KODASIS1($value)
 * @method static Builder|I09Vih whereI09KODASIS2($value)
 * @method static Builder|I09Vih whereI09KODASLS1($value)
 * @method static Builder|I09Vih whereI09KODASLS2($value)
 * @method static Builder|I09Vih whereI09KODASLS3($value)
 * @method static Builder|I09Vih whereI09KODASLS4($value)
 * @method static Builder|I09Vih whereI09KODASMS($value)
 * @method static Builder|I09Vih whereI09KODASSM1($value)
 * @method static Builder|I09Vih whereI09KODASSM2($value)
 * @method static Builder|I09Vih whereI09KODASSST($value)
 * @method static Builder|I09Vih whereI09KODASVD($value)
 * @method static Builder|I09Vih whereI09NUTOL1($value)
 * @method static Builder|I09Vih whereI09NUTOL2($value)
 * @method static Builder|I09Vih whereI09PAV($value)
 * @method static Builder|I09Vih whereI09PER1DATE($value)
 * @method static Builder|I09Vih whereI09PER1USER($value)
 * @method static Builder|I09Vih whereI09PERKELTA1($value)
 * @method static Builder|I09Vih whereI09PERKELTA2($value)
 * @method static Builder|I09Vih whereI09RDATE($value)
 * @method static Builder|I09Vih whereI09TIPAS($value)
 * @method static Builder|I09Vih whereI09USERIS($value)
 * @method static Builder|I09Vih whereId($value)
 * @method static Builder|I09Vih whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I09Vih extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I09_VIH';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I09_KODAS_VD',
        'I09_TIPAS',
        'I09_DOK_NR',
        'I09_IS_DATA',
        'I09_GAV_POZ',
        'I09_GAV_DATA',
        'I09_KODAS_IS1',
        'I09_KODAS_SS_T',
        'I09_NUTOL1',
        'I09_EIL1',
        'I09_EIL2',
        'I09_EIL3',
        'I09_KODAS_IS2',
        'I09_NUTOL2',
        'I09_A_EIL1',
        'I09_A_EIL2',
        'I09_A_EIL3',
        'I09_PERKELTA1',
        'I09_PERKELTA2',
        'I09_IMP_EXP',
        'I09_USERIS',
        'I09_R_DATE',
        'I09_ADDUSR',
        'I09_EIL_SK',
        'I09_KODAS_SM1',
        'I09_KODAS_SM2',
        'I09_PAV',
        'I09_KODAS_MS',
        'I09_KODAS_LS_1',
        'I09_KODAS_LS_2',
        'I09_KODAS_LS_3',
        'I09_KODAS_LS_4',
        'I09_ADD_DATE',
        'I09_PER1_DATE',
        'I09_PER1_USER',
        'I09_KODAS_AU',
    ];

}
