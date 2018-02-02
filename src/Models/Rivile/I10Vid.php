<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I10Vid
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I10_KODAS_VD Operacijos numeris
 * @property int|null $I10_EIL_NR Detalios eilutės numeris
 * @property string|null $I10_KODAS_TR Transporto operacijos numeris
 * @property int|null $I10_TIPAS Eilutės tipas:1-prekė
 * @property int|null $I10_PERKELTA Perkėlimas:1-neperkelta,2-perkelta,3-perkelta pirma dalis
 * @property string|null $I10_KODAS_PS Prekės kodas
 * @property string|null $I10_KODAS_OS1 Padalinio siuntėjo prekės objekto kodas
 * @property string|null $I10_SERIJA1 Padalinio siuntėjo prekės serija
 * @property string|null $I10_KODAS_OS2 Padalinio gavėjo prekės objekto kodas
 * @property string|null $I10_SERIJA2 Padalinio gavėjo prekės serijos
 * @property string|null $I10_PAV Prekės pavadinimas
 * @property string|null $I10_KODAS_US1 Perduodamas matavimo kodas
 * @property int|null $I10_KIEKIS1 Perduodamas kiekis
 * @property int|null $I10_FRAKCIJA1
 * @property string|null $I10_KODAS_US Pagrindinio matavimo vieneto kodas
 * @property int|null $I10_KIEKIS Kiekis pagrindiniu matu
 * @property int|null $I10_FRAKCIJA Pagrindinio matavimo frakcija
 * @property string|null $I10_KODAS_US2 Gavimo matavimo kodas
 * @property int|null $I10_KIEKIS2 Gaunamas kiekis
 * @property int|null $I10_FRAKCIJA2 Gavimo matavimo vieneto frakcija
 * @property float|null $I10_PIR_KAINA Pirkimo kaina
 * @property float|null $I10_PARD_KAINA1 Siuntėjo pardavimo kaina
 * @property float|null $I10_PARD_KAINA2 Gavėjo pardavimo kaina
 * @property float|null $I10_KITOS Kitos išlaidos
 * @property float|null $I10_MUITAS Muitas
 * @property float|null $I10_AKCIZAS Akcizas
 * @property float|null $I10_SAV_VISO Prekės savikaina
 * @property string|null $I10_GAL_DATA Galiojimo data
 * @property string|null $I10_USERIS Kas koregavo
 * @property string|null $I10_R_DATE Koregavimo laikas
 * @property string|null $I10_ADDUSR Kas sukūrė
 * @property string|null $I10_ADD_DATE Kada sukūrė
 * @property float|null $I10_KIEKIS_A Dešimtainis kiekis  (papildomas tagas)
 * @property string|null $I10_BAR_KODAS Bar kodas   (papildomas tagas)
 * @property string|null $I10_APRASYMAS1 Aprašymo laukas 1
 * @property string|null $I10_APRASYMAS2 Aprašymo laukas 2
 * @property string|null $I10_APRASYMAS3 Aprašymo laukas 3
 * @method static Builder|I10Vid whereCount($value)
 * @method static Builder|I10Vid whereCreatedAt($value)
 * @method static Builder|I10Vid whereDeletedAt($value)
 * @method static Builder|I10Vid whereI10ADDDATE($value)
 * @method static Builder|I10Vid whereI10ADDUSR($value)
 * @method static Builder|I10Vid whereI10AKCIZAS($value)
 * @method static Builder|I10Vid whereI10APRASYMAS1($value)
 * @method static Builder|I10Vid whereI10APRASYMAS2($value)
 * @method static Builder|I10Vid whereI10APRASYMAS3($value)
 * @method static Builder|I10Vid whereI10BARKODAS($value)
 * @method static Builder|I10Vid whereI10EILNR($value)
 * @method static Builder|I10Vid whereI10FRAKCIJA($value)
 * @method static Builder|I10Vid whereI10FRAKCIJA1($value)
 * @method static Builder|I10Vid whereI10FRAKCIJA2($value)
 * @method static Builder|I10Vid whereI10GALDATA($value)
 * @method static Builder|I10Vid whereI10KIEKIS($value)
 * @method static Builder|I10Vid whereI10KIEKIS1($value)
 * @method static Builder|I10Vid whereI10KIEKIS2($value)
 * @method static Builder|I10Vid whereI10KIEKISA($value)
 * @method static Builder|I10Vid whereI10KITOS($value)
 * @method static Builder|I10Vid whereI10KODASOS1($value)
 * @method static Builder|I10Vid whereI10KODASOS2($value)
 * @method static Builder|I10Vid whereI10KODASPS($value)
 * @method static Builder|I10Vid whereI10KODASTR($value)
 * @method static Builder|I10Vid whereI10KODASUS($value)
 * @method static Builder|I10Vid whereI10KODASUS1($value)
 * @method static Builder|I10Vid whereI10KODASUS2($value)
 * @method static Builder|I10Vid whereI10KODASVD($value)
 * @method static Builder|I10Vid whereI10MUITAS($value)
 * @method static Builder|I10Vid whereI10PARDKAINA1($value)
 * @method static Builder|I10Vid whereI10PARDKAINA2($value)
 * @method static Builder|I10Vid whereI10PAV($value)
 * @method static Builder|I10Vid whereI10PERKELTA($value)
 * @method static Builder|I10Vid whereI10PIRKAINA($value)
 * @method static Builder|I10Vid whereI10RDATE($value)
 * @method static Builder|I10Vid whereI10SAVVISO($value)
 * @method static Builder|I10Vid whereI10SERIJA1($value)
 * @method static Builder|I10Vid whereI10SERIJA2($value)
 * @method static Builder|I10Vid whereI10TIPAS($value)
 * @method static Builder|I10Vid whereI10USERIS($value)
 * @method static Builder|I10Vid whereId($value)
 * @method static Builder|I10Vid whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I10Vid extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I10_VID';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I10_KODAS_VD',
        'I10_EIL_NR',
        'I10_KODAS_TR',
        'I10_TIPAS',
        'I10_PERKELTA',
        'I10_KODAS_PS',
        'I10_KODAS_OS1',
        'I10_SERIJA1',
        'I10_KODAS_OS2',
        'I10_SERIJA2',
        'I10_PAV',
        'I10_KODAS_US1',
        'I10_KIEKIS1',
        'I10_FRAKCIJA1',
        'I10_KODAS_US',
        'I10_KIEKIS',
        'I10_FRAKCIJA',
        'I10_KODAS_US2',
        'I10_KIEKIS2',
        'I10_FRAKCIJA2',
        'I10_PIR_KAINA',
        'I10_PARD_KAINA1',
        'I10_PARD_KAINA2',
        'I10_KITOS',
        'I10_MUITAS',
        'I10_AKCIZAS',
        'I10_SAV_VISO',
        'I10_GAL_DATA',
        'I10_USERIS',
        'I10_R_DATE',
        'I10_ADDUSR',
        'I10_ADD_DATE',
        'I10_KIEKIS_A',
        'I10_BAR_KODAS',
        'I10_APRASYMAS1',
        'I10_APRASYMAS2',
        'I10_APRASYMAS3',
    ];

}
