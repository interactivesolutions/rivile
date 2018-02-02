<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I05Atd
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I05_KODAS_CH Operacijos numeris
 * @property string|null $I05_EIL_NR Eilutės numeris dokumente
 * @property string|null $I05_DOK_NR Dokumento numeris
 * @property string|null $I05_DATA_DOK Dokumento data
 * @property string|null $I05_DATA_MOK Mokėjimo data
 * @property string|null $I05_DATA_DSK Diskonto data
 * @property string|null $I05_APR Pastabos
 * @property float|null $I05_SUMA Mokėjimo suma
 * @property float|null $I05_SUMA_DSK Suteikiamas diskontas
 * @property float|null $I05_SUMA_PLK Palūkanų suma
 * @property string|null $I05_KODAS_SS Sąskaitos kodas
 * @property string|null $I05_KODAS_VL Operacijos valiutos kodas
 * @property string|null $I05_KODAS_VL_S Skolos valiutos kodas
 * @property float|null $I05_SUMA_VAL_DSK Valiutos diskontas
 * @property float|null $I05_KOEF Konvertavimo koeficientas -> Bazinė valiuta
 * @property float|null $I05_KOEF_S Konvertavimo koeficientas <- Bazinė valiuta
 * @property float|null $I05_SUMA_VAL Mokėjimo suma valiuta
 * @property float|null $I05_SUMA_VAL_S Sudengimo suma valiuta
 * @property string|null $I05_KODAS_IS Padalinio kodas
 * @property string|null $I05_KODAS_OS Objekto kodas
 * @property string|null $I05_KODAS_OS_C Centro kodas
 * @property string|null $I05_KODAS_MS Menedžerio kodas
 * @property string|null $I05_USERIS Kas koregavo
 * @property string|null $I05_R_DATE Kada koregavo
 * @property string|null $I05_ADDUSR Kas sukūrė
 * @property string|null $I05_KODAS_KT Sutartis
 * @property string|null $I05_KODAS_K0 Sutarties priedas
 * @property float|null $I05_SUMA_PER Valiutos perskaičiavimo suma
 * @method static Builder|I05Atd whereCount($value)
 * @method static Builder|I05Atd whereCreatedAt($value)
 * @method static Builder|I05Atd whereDeletedAt($value)
 * @method static Builder|I05Atd whereI05ADDUSR($value)
 * @method static Builder|I05Atd whereI05APR($value)
 * @method static Builder|I05Atd whereI05DATADOK($value)
 * @method static Builder|I05Atd whereI05DATADSK($value)
 * @method static Builder|I05Atd whereI05DATAMOK($value)
 * @method static Builder|I05Atd whereI05DOKNR($value)
 * @method static Builder|I05Atd whereI05EILNR($value)
 * @method static Builder|I05Atd whereI05KODASCH($value)
 * @method static Builder|I05Atd whereI05KODASIS($value)
 * @method static Builder|I05Atd whereI05KODASK0($value)
 * @method static Builder|I05Atd whereI05KODASKT($value)
 * @method static Builder|I05Atd whereI05KODASMS($value)
 * @method static Builder|I05Atd whereI05KODASOS($value)
 * @method static Builder|I05Atd whereI05KODASOSC($value)
 * @method static Builder|I05Atd whereI05KODASSS($value)
 * @method static Builder|I05Atd whereI05KODASVL($value)
 * @method static Builder|I05Atd whereI05KODASVLS($value)
 * @method static Builder|I05Atd whereI05KOEF($value)
 * @method static Builder|I05Atd whereI05KOEFS($value)
 * @method static Builder|I05Atd whereI05RDATE($value)
 * @method static Builder|I05Atd whereI05SUMA($value)
 * @method static Builder|I05Atd whereI05SUMADSK($value)
 * @method static Builder|I05Atd whereI05SUMAPER($value)
 * @method static Builder|I05Atd whereI05SUMAPLK($value)
 * @method static Builder|I05Atd whereI05SUMAVAL($value)
 * @method static Builder|I05Atd whereI05SUMAVALDSK($value)
 * @method static Builder|I05Atd whereI05SUMAVALS($value)
 * @method static Builder|I05Atd whereI05USERIS($value)
 * @method static Builder|I05Atd whereId($value)
 * @method static Builder|I05Atd whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I05Atd extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I05_ATD';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I05_KODAS_CH',
        'I05_EIL_NR',
        'I05_DOK_NR',
        'I05_DATA_DOK',
        'I05_DATA_MOK',
        'I05_DATA_DSK',
        'I05_APR',
        'I05_SUMA',
        'I05_SUMA_DSK',
        'I05_SUMA_PLK',
        'I05_KODAS_SS',
        'I05_KODAS_VL',
        'I05_KODAS_VL_S',
        'I05_SUMA_VAL_DSK',
        'I05_KOEF',
        'I05_KOEF_S',
        'I05_SUMA_VAL',
        'I05_SUMA_VAL_S',
        'I05_KODAS_IS',
        'I05_KODAS_OS',
        'I05_KODAS_OS_C',
        'I05_KODAS_MS',
        'I05_USERIS',
        'I05_R_DATE',
        'I05_ADDUSR',
        'I05_KODAS_KT',
        'I05_KODAS_K0',
        'I05_SUMA_PER',
    ];

}
