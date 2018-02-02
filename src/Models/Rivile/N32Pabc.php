<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N32Pabc
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N32_KODAS_PS Prekės/Paslaugos kodas
 * @property string|null $N32_KODAS_US Matavimo vieneto kodas
 * @property string|null $N32_TIPAS Nuolaidos tipas A,B,C,...J
 * @property string|null $N32_G_DATE Galioja nuo
 * @property float|null $N32_KAINA1 Kaina 1
 * @property float|null $N32_KAINA2 Kaina 2 priklausanti nuo kiekio 2
 * @property int|null $N32_KIEKIS2 Kiekis 2
 * @property float|null $N32_KAINA3 Kaina 3 priklausanti nuo kiekio 3
 * @property int|null $N32_KIEKIS3 Kiekis 3
 * @property float|null $N32_KAINA4 Kaina 4 priklausanti nuo kiekio 4
 * @property int|null $N32_KIEKIS4 Kiekis 4
 * @property string|null $N32_USERIS Kas koregavo
 * @property string|null $N32_R_DATE Kada koregavo
 * @property string|null $N32_ADDUSR Kas sukūrė
 * @property string|null $N32_ID Įmonės Id.
 * @method static Builder|N32Pabc whereCount($value)
 * @method static Builder|N32Pabc whereCreatedAt($value)
 * @method static Builder|N32Pabc whereDeletedAt($value)
 * @method static Builder|N32Pabc whereId($value)
 * @method static Builder|N32Pabc whereN32ADDUSR($value)
 * @method static Builder|N32Pabc whereN32GDATE($value)
 * @method static Builder|N32Pabc whereN32ID($value)
 * @method static Builder|N32Pabc whereN32KAINA1($value)
 * @method static Builder|N32Pabc whereN32KAINA2($value)
 * @method static Builder|N32Pabc whereN32KAINA3($value)
 * @method static Builder|N32Pabc whereN32KAINA4($value)
 * @method static Builder|N32Pabc whereN32KIEKIS2($value)
 * @method static Builder|N32Pabc whereN32KIEKIS3($value)
 * @method static Builder|N32Pabc whereN32KIEKIS4($value)
 * @method static Builder|N32Pabc whereN32KODASPS($value)
 * @method static Builder|N32Pabc whereN32KODASUS($value)
 * @method static Builder|N32Pabc whereN32RDATE($value)
 * @method static Builder|N32Pabc whereN32TIPAS($value)
 * @method static Builder|N32Pabc whereN32USERIS($value)
 * @method static Builder|N32Pabc whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N32Pabc extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N32_PABC';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N32_KODAS_PS',
        'N32_KODAS_US',
        'N32_TIPAS',
        'N32_G_DATE',
        'N32_KAINA1',
        'N32_KAINA2',
        'N32_KIEKIS2',
        'N32_KAINA3',
        'N32_KIEKIS3',
        'N32_KAINA4',
        'N32_KIEKIS4',
        'N32_USERIS',
        'N32_R_DATE',
        'N32_ADDUSR',
        'N32_ID',
    ];

}
