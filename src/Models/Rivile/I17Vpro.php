<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\I17Vpro
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I17_KODAS_IS Padalinio kodas
 * @property string|null $I17_KODAS_PS Prekės kodas
 * @property string|null $I17_KODAS_OS Objekto kodas
 * @property string|null $I17_SERIJA Serija
 * @property string|null $I17_KODAS_US_A Alternatyvaus matavimo vieneto kodas
 * @property string|null $I17_KODAS_US Pagrindinis matavimo vieneto kodas
 * @property int|null $I17_FRAKCIJA Pagrindinio matavimo vieneto frakcija
 * @property int|null $I17_KIEKIS FIFO likutis
 * @property int|null $I17_ATIDUOTA Atiduota
 * @property int|null $I17_REZERVAS Užrezervuota
 * @property int|null $I17_PARD_UZS Pirkėjų užsakymai
 * @property int|null $I17_PIRK_UZS Užsakyta pas tiekėjus
 * @property float|null $I17_SUMA FIFO likučių suma
 * @property float|null $I17_P_PIR_K Paskutinio pirkimo kaina
 * @property string|null $I17_P_PIR_D Paskutinio pirkimo data
 * @property float|null $I17_P_PAR_K Paskutinio pardavimo suma
 * @property string|null $I17_P_PAR_D Paskutinio pardavimo data
 * @property int|null $I17_VID_UZS Užsakymas iš vidinio padalinio
 * @property int|null $I17_REIKALAVIMAS Pareikalavimas iš vidinio padalinio
 * @property int|null $I17_KELYJE Prekės kelyje
 * @property float|null $I17_KAINA Pardavimo kaina objekte
 * @property string|null $I17_USERIS Kas koregavo
 * @property string|null $I17_ADDUSR Kas sukūrė
 * @property string|null $I17_R_DATE Kada koregavo
 * @property float|null $likutis_us Dešimtainis kiekis pagrindiniu matavimo vientetu
 * @property float|null $likutis_us_a Dešimtainis kiekis alternatyviu matavimo vienetu
 * @method static Builder|I17Vpro whereCount($value)
 * @method static Builder|I17Vpro whereCreatedAt($value)
 * @method static Builder|I17Vpro whereDeletedAt($value)
 * @method static Builder|I17Vpro whereI17ADDUSR($value)
 * @method static Builder|I17Vpro whereI17ATIDUOTA($value)
 * @method static Builder|I17Vpro whereI17FRAKCIJA($value)
 * @method static Builder|I17Vpro whereI17KAINA($value)
 * @method static Builder|I17Vpro whereI17KELYJE($value)
 * @method static Builder|I17Vpro whereI17KIEKIS($value)
 * @method static Builder|I17Vpro whereI17KODASIS($value)
 * @method static Builder|I17Vpro whereI17KODASOS($value)
 * @method static Builder|I17Vpro whereI17KODASPS($value)
 * @method static Builder|I17Vpro whereI17KODASUS($value)
 * @method static Builder|I17Vpro whereI17KODASUSA($value)
 * @method static Builder|I17Vpro whereI17PARDUZS($value)
 * @method static Builder|I17Vpro whereI17PIRKUZS($value)
 * @method static Builder|I17Vpro whereI17PPARD($value)
 * @method static Builder|I17Vpro whereI17PPARK($value)
 * @method static Builder|I17Vpro whereI17PPIRD($value)
 * @method static Builder|I17Vpro whereI17PPIRK($value)
 * @method static Builder|I17Vpro whereI17RDATE($value)
 * @method static Builder|I17Vpro whereI17REIKALAVIMAS($value)
 * @method static Builder|I17Vpro whereI17REZERVAS($value)
 * @method static Builder|I17Vpro whereI17SERIJA($value)
 * @method static Builder|I17Vpro whereI17SUMA($value)
 * @method static Builder|I17Vpro whereI17USERIS($value)
 * @method static Builder|I17Vpro whereI17VIDUZS($value)
 * @method static Builder|I17Vpro whereId($value)
 * @method static Builder|I17Vpro whereLikutisUs($value)
 * @method static Builder|I17Vpro whereLikutisUsA($value)
 * @method static Builder|I17Vpro whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \InteractiveSolutions\Rivile\Models\N17Prod|null $n17Prod
 */
class I17Vpro extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I17_VPRO';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I17_KODAS_IS',
        'I17_KODAS_PS',
        'I17_KODAS_OS',
        'I17_SERIJA',
        'I17_KODAS_US_A',
        'I17_KODAS_US',
        'I17_FRAKCIJA',
        'I17_KIEKIS',
        'I17_ATIDUOTA',
        'I17_REZERVAS',
        'I17_PARD_UZS',
        'I17_PIRK_UZS',
        'I17_SUMA',
        'I17_P_PIR_K',
        'I17_P_PIR_D',
        'I17_P_PAR_K',
        'I17_P_PAR_D',
        'I17_VID_UZS',
        'I17_REIKALAVIMAS',
        'I17_KELYJE',
        'I17_KAINA',
        'I17_USERIS',
        'I17_ADDUSR',
        'I17_R_DATE',
        'likutis_us',
        'likutis_us_a',
    ];

    protected $casts = [
        'id' => 'string',
        'I17_KODAS_PS' => 'string',
    ];

    /**
     * @return BelongsTo
     */
    public function n17Prod(): BelongsTo
    {
        return $this->belongsTo(N17Prod::class, 'I17_KODAS_PS', 'N17_KODAS_PS');
    }
}
