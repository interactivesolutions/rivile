<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I33Pkai
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I33_KODAS_PS Prekės kodas
 * @property string|null $I33_KODAS_IS Padalinio kodas
 * @property string|null $I33_KODAS_US Matavimo kodas
 * @property float|null $I33_KAINA Pardavimo kaina
 * @property float|null $I33_KAINA_NEW Nauja pardavimo kaina
 * @property float|null $I33_PPK Paskutinio pirkimo kaina
 * @property string|null $I33_PPK_DATE Paskutinio pirkimo data
 * @property string|null $I33_KODAS_VL Valiuta
 * @property float|null $I33_PPK_VAL Pirkimo kaina valiuta
 * @property float|null $I33_PPK_SAV Paskutinio pajamavimo vid. kaina
 * @property string|null $I33_PPK_SAV_DATE Paskutinio pajamavimo data
 * @property string|null $I33_ADDUSR Kas sukūrė
 * @property string|null $I33_USERIS Kas koregavo
 * @property string|null $I33_R_DATE Kada koregavo
 * @property int|null $I33_FORMATAS Formatas spausdinimui
 * @property string|null $I33_POZ Požymiai
 * @property float|null $I33_KAINA_BAZ Bazinė kaina (Vaistams)
 * @property int|null $I33_POZ_POS POS-uose, kaina 1-nekoreguojama;2-koreguojama;3-kompensuojama
 * @method static Builder|I33Pkai whereCount($value)
 * @method static Builder|I33Pkai whereCreatedAt($value)
 * @method static Builder|I33Pkai whereDeletedAt($value)
 * @method static Builder|I33Pkai whereI33ADDUSR($value)
 * @method static Builder|I33Pkai whereI33FORMATAS($value)
 * @method static Builder|I33Pkai whereI33KAINA($value)
 * @method static Builder|I33Pkai whereI33KAINABAZ($value)
 * @method static Builder|I33Pkai whereI33KAINANEW($value)
 * @method static Builder|I33Pkai whereI33KODASIS($value)
 * @method static Builder|I33Pkai whereI33KODASPS($value)
 * @method static Builder|I33Pkai whereI33KODASUS($value)
 * @method static Builder|I33Pkai whereI33KODASVL($value)
 * @method static Builder|I33Pkai whereI33POZ($value)
 * @method static Builder|I33Pkai whereI33POZPOS($value)
 * @method static Builder|I33Pkai whereI33PPK($value)
 * @method static Builder|I33Pkai whereI33PPKDATE($value)
 * @method static Builder|I33Pkai whereI33PPKSAV($value)
 * @method static Builder|I33Pkai whereI33PPKSAVDATE($value)
 * @method static Builder|I33Pkai whereI33PPKVAL($value)
 * @method static Builder|I33Pkai whereI33RDATE($value)
 * @method static Builder|I33Pkai whereI33USERIS($value)
 * @method static Builder|I33Pkai whereId($value)
 * @method static Builder|I33Pkai whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I33Pkai extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I33_PKAI';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I33_KODAS_PS',
        'I33_KODAS_IS',
        'I33_KODAS_US',
        'I33_KAINA',
        'I33_KAINA_NEW',
        'I33_PPK',
        'I33_PPK_DATE',
        'I33_KODAS_VL',
        'I33_PPK_VAL',
        'I33_PPK_SAV',
        'I33_PPK_SAV_DATE',
        'I33_ADDUSR',
        'I33_USERIS',
        'I33_R_DATE',
        'I33_FORMATAS',
        'I33_POZ',
        'I33_KAINA_BAZ',
        'I33_POZ_POS',
    ];

}
