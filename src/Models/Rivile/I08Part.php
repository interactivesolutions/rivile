<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I08Part
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I08_KODAS_PO Operacijos Numeris
 * @property int|null $I08_EIL_NR Eilės numeris
 * @property int|null $I08_NUOL_D Diskontų dienos
 * @property float|null $I08_NUOL_P Diskontų procentas
 * @property int|null $I08_MOK_D Mokėjimo dienos
 * @property float|null $I08_MOK_P Mokėjimo procentas
 * @property float|null $I08_SUMA_PLK Palūkanų suma
 * @property string|null $I08_R_DATE Koregavimo laikas
 * @property string|null $I08_USERIS Kas koregavo
 * @property string|null $I08_ADDUSR Kas sukūrė
 * @property float|null $I08_MOK_S Mokėjimo suma
 * @property float|null $I08_PLK_P Palūkanų procentas
 * @property-read I06Parh $i06Parh
 * @method static Builder|I08Part whereCount($value)
 * @method static Builder|I08Part whereCreatedAt($value)
 * @method static Builder|I08Part whereDeletedAt($value)
 * @method static Builder|I08Part whereI08ADDUSR($value)
 * @method static Builder|I08Part whereI08EILNR($value)
 * @method static Builder|I08Part whereI08KODASPO($value)
 * @method static Builder|I08Part whereI08MOKD($value)
 * @method static Builder|I08Part whereI08MOKP($value)
 * @method static Builder|I08Part whereI08MOKS($value)
 * @method static Builder|I08Part whereI08NUOLD($value)
 * @method static Builder|I08Part whereI08NUOLP($value)
 * @method static Builder|I08Part whereI08PLKP($value)
 * @method static Builder|I08Part whereI08RDATE($value)
 * @method static Builder|I08Part whereI08SUMAPLK($value)
 * @method static Builder|I08Part whereI08USERIS($value)
 * @method static Builder|I08Part whereId($value)
 * @method static Builder|I08Part whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I08Part extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I08_PART';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I08_KODAS_PO',
        'I08_EIL_NR',
        'I08_NUOL_D',
        'I08_NUOL_P',
        'I08_MOK_D',
        'I08_MOK_P',
        'I08_SUMA_PLK',
        'I08_R_DATE',
        'I08_USERIS',
        'I08_ADDUSR',
        'I08_MOK_S',
        'I08_PLK_P',
    ];

    /**
     * @return HasOne
     */
    public function i06Parh(): HasOne
    {
        return $this->hasOne(I06Parh::class, 'I06_KODAS_PO', 'I08_KODAS_PO');
    }

}
