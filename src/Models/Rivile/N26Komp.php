<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N26Komp
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N26_KODAS_PS Gaminio kodas
 * @property int|null $N26_EIL_NR Eilutės numeris
 * @property int|null $N26_TIPAS Komponentės tipas:1-prekė,2-kodas
 * @property string|null $N26_KODAS_PS_K Komponentės kodas
 * @property string|null $N26_KODAS_US Matavimo vienetas
 * @property int|null $N26_FRAKCIJA Matavimo vnt. frakcija
 * @property int|null $N26_KIEKIS Reikalingas kiekis
 * @property int|null $N26_G_KIEKIS Kokiam gaminio kiekiui aprašytas reikalingas kiekis
 * @property int|null $N26_ISB_POZ Išbarstymo požymis:0-ne,1-taip
 * @property float|null $N26_ISEIG_PROC Sumos Išeigos procentas išbarstyme
 * @property int|null $N26_KOMP_POZ Komplektavimo požymis:0-ne,1-taip
 * @property int|null $N26_KREPS_POZ Krepšelio požymis:0-ne,1-taip
 * @property int|null $N26_EKSP_POZ Ekspozicijos požymis:0-ne,1-taip
 * @property string|null $N26_KITI_POZ Kiti požymiai
 * @property string|null $N26_USERIS Kas koregavo
 * @property string|null $N26_R_DATE Kada koregavo
 * @property string|null $N26_ADDUSR Kas sukūrė
 * @property int|null $N26_KOMP_SVS SVS požymis
 * @method static Builder|N26Komp whereCount($value)
 * @method static Builder|N26Komp whereCreatedAt($value)
 * @method static Builder|N26Komp whereDeletedAt($value)
 * @method static Builder|N26Komp whereId($value)
 * @method static Builder|N26Komp whereN26ADDUSR($value)
 * @method static Builder|N26Komp whereN26EILNR($value)
 * @method static Builder|N26Komp whereN26EKSPPOZ($value)
 * @method static Builder|N26Komp whereN26FRAKCIJA($value)
 * @method static Builder|N26Komp whereN26GKIEKIS($value)
 * @method static Builder|N26Komp whereN26ISBPOZ($value)
 * @method static Builder|N26Komp whereN26ISEIGPROC($value)
 * @method static Builder|N26Komp whereN26KIEKIS($value)
 * @method static Builder|N26Komp whereN26KITIPOZ($value)
 * @method static Builder|N26Komp whereN26KODASPS($value)
 * @method static Builder|N26Komp whereN26KODASPSK($value)
 * @method static Builder|N26Komp whereN26KODASUS($value)
 * @method static Builder|N26Komp whereN26KOMPPOZ($value)
 * @method static Builder|N26Komp whereN26KOMPSVS($value)
 * @method static Builder|N26Komp whereN26KREPSPOZ($value)
 * @method static Builder|N26Komp whereN26RDATE($value)
 * @method static Builder|N26Komp whereN26TIPAS($value)
 * @method static Builder|N26Komp whereN26USERIS($value)
 * @method static Builder|N26Komp whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N26Komp extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N26_KOMP';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N26_KODAS_PS',
        'N26_EIL_NR',
        'N26_TIPAS',
        'N26_KODAS_PS_K',
        'N26_KODAS_US',
        'N26_FRAKCIJA',
        'N26_KIEKIS',
        'N26_G_KIEKIS',
        'N26_ISB_POZ',
        'N26_ISEIG_PROC',
        'N26_KOMP_POZ',
        'N26_KREPS_POZ',
        'N26_EKSP_POZ',
        'N26_KITI_POZ',
        'N26_USERIS',
        'N26_R_DATE',
        'N26_ADDUSR',
        'N26_KOMP_SVS',
    ];

}
