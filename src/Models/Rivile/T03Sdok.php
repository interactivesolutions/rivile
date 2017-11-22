<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\T03Sdok
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $T03_KODAS_KS Kliento kodas
 * @property string|null $T03_DOK_NR Dokumento numeris
 * @property string|null $T03_DATA_MOK Mokėjimo data
 * @property string|null $T03_KODAS_VL Valiutos kodas
 * @property string|null $T03_DATA_DOK Dokumento data
 * @property string|null $T03_DATA_DSK Diskonto data
 * @property float|null $T03_SUMA_DB_VL Suma debete valiuta
 * @property float|null $T03_SUMA_CR_VL Suma kredite valiuta
 * @property float|null $T03_SUMA_DB Suma debete
 * @property float|null $T03_SUMA_CR Suma kredite
 * @property float|null $T03_DSK_PROC Diskonto procentas
 * @property float|null $T03_SUMA_PLK Palūkanų suma
 * @property string|null $T03_USERIS Kas koregavo
 * @property string|null $T03_R_DATE Kada koregavo
 * @method static Builder|T03Sdok whereCount($value)
 * @method static Builder|T03Sdok whereCreatedAt($value)
 * @method static Builder|T03Sdok whereDeletedAt($value)
 * @method static Builder|T03Sdok whereId($value)
 * @method static Builder|T03Sdok whereT03DATADOK($value)
 * @method static Builder|T03Sdok whereT03DATADSK($value)
 * @method static Builder|T03Sdok whereT03DATAMOK($value)
 * @method static Builder|T03Sdok whereT03DOKNR($value)
 * @method static Builder|T03Sdok whereT03DSKPROC($value)
 * @method static Builder|T03Sdok whereT03KODASKS($value)
 * @method static Builder|T03Sdok whereT03KODASVL($value)
 * @method static Builder|T03Sdok whereT03RDATE($value)
 * @method static Builder|T03Sdok whereT03SUMACR($value)
 * @method static Builder|T03Sdok whereT03SUMACRVL($value)
 * @method static Builder|T03Sdok whereT03SUMADB($value)
 * @method static Builder|T03Sdok whereT03SUMADBVL($value)
 * @method static Builder|T03Sdok whereT03SUMAPLK($value)
 * @method static Builder|T03Sdok whereT03USERIS($value)
 * @method static Builder|T03Sdok whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class T03Sdok extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'T03_SDOK';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'T03_KODAS_KS',
        'T03_DOK_NR',
        'T03_DATA_MOK',
        'T03_KODAS_VL',
        'T03_DATA_DOK',
        'T03_DATA_DSK',
        'T03_SUMA_DB_VL',
        'T03_SUMA_CR_VL',
        'T03_SUMA_DB',
        'T03_SUMA_CR',
        'T03_DSK_PROC',
        'T03_SUMA_PLK',
        'T03_USERIS',
        'T03_R_DATE',
    ];

}
