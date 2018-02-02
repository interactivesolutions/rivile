<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N31Nuod
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N31_KODAS_NS Nuolaidos lentelės kodas
 * @property int|null $N31_EIL_NR Detalios eilutės numeris
 * @property float|null $N31_MINIMUM Minimalus kiekis pagrindiniu matu
 * @property float|null $N31_NUOL_PROC Nuolaidos procentas
 * @property string|null $N31_USERIS Kas koregavo
 * @property string|null $N31_R_DATE Kada koregavo
 * @property string|null $N31_ADDUSR Kas sukūrė
 * @method static Builder|N31Nuod whereCount($value)
 * @method static Builder|N31Nuod whereCreatedAt($value)
 * @method static Builder|N31Nuod whereDeletedAt($value)
 * @method static Builder|N31Nuod whereId($value)
 * @method static Builder|N31Nuod whereN31ADDUSR($value)
 * @method static Builder|N31Nuod whereN31EILNR($value)
 * @method static Builder|N31Nuod whereN31KODASNS($value)
 * @method static Builder|N31Nuod whereN31MINIMUM($value)
 * @method static Builder|N31Nuod whereN31NUOLPROC($value)
 * @method static Builder|N31Nuod whereN31RDATE($value)
 * @method static Builder|N31Nuod whereN31USERIS($value)
 * @method static Builder|N31Nuod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N31Nuod extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N31_NUOD';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N31_KODAS_NS',
        'N31_EIL_NR',
        'N31_MINIMUM',
        'N31_NUOL_PROC',
        'N31_USERIS',
        'N31_R_DATE',
        'N31_ADDUSR',
    ];

}
