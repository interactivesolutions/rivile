<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\I44Skol
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I44_MODUL Modulis
 * @property string|null $I44_KODAS_OP Operacijos numeris
 * @property int|null $I44_EIL_NR Eilutės numeris operacijoje
 * @property int|null $I44_TIPAS Tipas 1-Važtaraštis, 2-Grąžinimas,3-Mokėjimas,4-Diskontai,5-Debetai,6-Kreditai,7-delspinigiai,8-9-Palūkanos,10-Sudengimas,11-Reikalavimas
 * @property string|null $I44_DOK_NR Dokumento numeris
 * @property string|null $I44_KODAS_KS Kliento kodas
 * @property string|null $I44_KODAS_MS Menedžerio kodas
 * @property string|null $I44_KODAS_IS Padalinio kodas
 * @property string|null $I44_KODAS_OS Objekto kodas
 * @property string|null $I44_KODAS_OS_C Centro kodas
 * @property string|null $I44_KODAS_SS Kliento skolos sąskaita
 * @property string|null $I44_DATA_DOK Dokumento data
 * @property string|null $I44_DATA_MOK Mokėjimo data
 * @property string|null $I44_DATA_DSK Diskonto data
 * @property float|null $I44_DSK_PROC Diskonto procentas
 * @property float|null $I44_SUMA_DB Suma debete
 * @property float|null $I44_SUMA_CR Suma kredite
 * @property string|null $I44_KODAS_VL Valiutos kodas
 * @property float|null $I44_SUMA_DB_VL Valiutos debetas
 * @property float|null $I44_SUMA_CR_VL Palūkanų suma
 * @property float|null $I44_SUMA_PLK Palūkanų suma
 * @property float|null $I44_SAVIKAINA Savikaina
 * @property float|null $I44_PVM PVM suma kliento skoloje
 * @property string|null $I44_PASTABOS Trumpas komentaras
 * @property string|null $I44_ADDUSR Kas sukūrė
 * @property string|null $I44_R_DATE Koregavimo laikas
 * @property string|null $I44_USERIS Kas koregavo
 * @property string|null $I44_KODAS_KT Sutartis
 * @property string|null $I44_KODAS_K0 Sutarties priedas
 * @method static Builder|I44Skol whereCount($value)
 * @method static Builder|I44Skol whereCreatedAt($value)
 * @method static Builder|I44Skol whereDeletedAt($value)
 * @method static Builder|I44Skol whereI44ADDUSR($value)
 * @method static Builder|I44Skol whereI44DATADOK($value)
 * @method static Builder|I44Skol whereI44DATADSK($value)
 * @method static Builder|I44Skol whereI44DATAMOK($value)
 * @method static Builder|I44Skol whereI44DOKNR($value)
 * @method static Builder|I44Skol whereI44DSKPROC($value)
 * @method static Builder|I44Skol whereI44EILNR($value)
 * @method static Builder|I44Skol whereI44KODASIS($value)
 * @method static Builder|I44Skol whereI44KODASK0($value)
 * @method static Builder|I44Skol whereI44KODASKS($value)
 * @method static Builder|I44Skol whereI44KODASKT($value)
 * @method static Builder|I44Skol whereI44KODASMS($value)
 * @method static Builder|I44Skol whereI44KODASOP($value)
 * @method static Builder|I44Skol whereI44KODASOS($value)
 * @method static Builder|I44Skol whereI44KODASOSC($value)
 * @method static Builder|I44Skol whereI44KODASSS($value)
 * @method static Builder|I44Skol whereI44KODASVL($value)
 * @method static Builder|I44Skol whereI44MODUL($value)
 * @method static Builder|I44Skol whereI44PASTABOS($value)
 * @method static Builder|I44Skol whereI44PVM($value)
 * @method static Builder|I44Skol whereI44RDATE($value)
 * @method static Builder|I44Skol whereI44SAVIKAINA($value)
 * @method static Builder|I44Skol whereI44SUMACR($value)
 * @method static Builder|I44Skol whereI44SUMACRVL($value)
 * @method static Builder|I44Skol whereI44SUMADB($value)
 * @method static Builder|I44Skol whereI44SUMADBVL($value)
 * @method static Builder|I44Skol whereI44SUMAPLK($value)
 * @method static Builder|I44Skol whereI44TIPAS($value)
 * @method static Builder|I44Skol whereI44USERIS($value)
 * @method static Builder|I44Skol whereId($value)
 * @method static Builder|I44Skol whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I44Skol extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I44_SKOL';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I44_MODUL',
        'I44_KODAS_OP',
        'I44_EIL_NR',
        'I44_TIPAS',
        'I44_DOK_NR',
        'I44_KODAS_KS',
        'I44_KODAS_MS',
        'I44_KODAS_IS',
        'I44_KODAS_OS',
        'I44_KODAS_OS_C',
        'I44_KODAS_SS',
        'I44_DATA_DOK',
        'I44_DATA_MOK',
        'I44_DATA_DSK',
        'I44_DSK_PROC',
        'I44_SUMA_DB',
        'I44_SUMA_CR',
        'I44_KODAS_VL',
        'I44_SUMA_DB_VL',
        'I44_SUMA_CR_VL',
        'I44_SUMA_PLK',
        'I44_SAVIKAINA',
        'I44_PVM',
        'I44_PASTABOS',
        'I44_ADDUSR',
        'I44_R_DATE',
        'I44_USERIS',
        'I44_KODAS_KT',
        'I44_KODAS_K0',
    ];

}
