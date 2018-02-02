<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N40Abar
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N40_BAR_KODAS Bar kodas
 * @property string|null $N40_KODAS_PS Prekės kodas
 * @property string|null $N40_KODAS_US Matavimo vienetas
 * @property string|null $N40_USERIS Kas koregavo
 * @property string|null $N40_R_DATE Kada koreguotas
 * @property string|null $N40_ADDUSR Kas sukūrė
 * @method static Builder|N40Abar whereCount($value)
 * @method static Builder|N40Abar whereCreatedAt($value)
 * @method static Builder|N40Abar whereDeletedAt($value)
 * @method static Builder|N40Abar whereId($value)
 * @method static Builder|N40Abar whereN40ADDUSR($value)
 * @method static Builder|N40Abar whereN40BARKODAS($value)
 * @method static Builder|N40Abar whereN40KODASPS($value)
 * @method static Builder|N40Abar whereN40KODASUS($value)
 * @method static Builder|N40Abar whereN40RDATE($value)
 * @method static Builder|N40Abar whereN40USERIS($value)
 * @method static Builder|N40Abar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N40Abar extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N40_ABAR';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N40_BAR_KODAS',
        'N40_KODAS_PS',
        'N40_KODAS_US',
        'N40_USERIS',
        'N40_R_DATE',
        'N40_ADDUSR',
    ];

}
