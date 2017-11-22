<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\N87Tpre
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N87_KODAS_PS Prekė
 * @property string|null $N87_KODAS_US Mat.Vnt.
 * @property string|null $N87_KODAS_KS Klientas
 * @property string|null $N87_PAV Pavadinimas
 * @property string|null $N87_KODAS Kliento prekės kodas
 * @property string|null $N87_APRASYMAS Aprašymas
 * @property string|null $N87_EIL1 Eilutė 1
 * @property string|null $N87_EIL2 Eilutė 2
 * @property string|null $N87_EIL3 Eilutė 3
 * @property float|null $N87_NUM1 Skaičius 1
 * @property float|null $N87_NUM2 Skaičius 2
 * @property float|null $N87_NUM3 Skaičius 3
 * @property string|null $N87_USERIS Kas koregavo
 * @property string|null $N87_R_DATE Kada koregavo
 * @property string|null $N87_ADDUSR Kas sukūrė
 * @method static Builder|N87Tpre whereCount($value)
 * @method static Builder|N87Tpre whereCreatedAt($value)
 * @method static Builder|N87Tpre whereDeletedAt($value)
 * @method static Builder|N87Tpre whereId($value)
 * @method static Builder|N87Tpre whereN87ADDUSR($value)
 * @method static Builder|N87Tpre whereN87APRASYMAS($value)
 * @method static Builder|N87Tpre whereN87EIL1($value)
 * @method static Builder|N87Tpre whereN87EIL2($value)
 * @method static Builder|N87Tpre whereN87EIL3($value)
 * @method static Builder|N87Tpre whereN87KODAS($value)
 * @method static Builder|N87Tpre whereN87KODASKS($value)
 * @method static Builder|N87Tpre whereN87KODASPS($value)
 * @method static Builder|N87Tpre whereN87KODASUS($value)
 * @method static Builder|N87Tpre whereN87NUM1($value)
 * @method static Builder|N87Tpre whereN87NUM2($value)
 * @method static Builder|N87Tpre whereN87NUM3($value)
 * @method static Builder|N87Tpre whereN87PAV($value)
 * @method static Builder|N87Tpre whereN87RDATE($value)
 * @method static Builder|N87Tpre whereN87USERIS($value)
 * @method static Builder|N87Tpre whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N87Tpre extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N87_TPRE';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N87_KODAS_PS',
        'N87_KODAS_US',
        'N87_KODAS_KS',
        'N87_PAV',
        'N87_KODAS',
        'N87_APRASYMAS',
        'N87_EIL1',
        'N87_EIL2',
        'N87_EIL3',
        'N87_NUM1',
        'N87_NUM2',
        'N87_NUM3',
        'N87_USERIS',
        'N87_R_DATE',
        'N87_ADDUSR',
    ];

}
