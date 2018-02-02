<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N37Pmat
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N37_KODAS_PS Prekės kodas
 * @property string|null $N37_KODAS_US Matavimo kodas
 * @property string|null $N37_BAR_KODAS Prekės Bar kodas
 * @property string|null $N37_TRUM_PAV Trumpas prekės pav. siunčiant į kasas
 * @property string|null $N37_PAV Ilgas prekės pavadinimas
 * @property int|null $N37_KASOS_POZ Svėrimo požumis:0-ne,1-taip
 * @property int|null $N37_SVARST_POZ Siųsti į svarstykles:0-ne,1-taip
 * @property string|null $N37_SK_SVARST Svarstyklių skyrius
 * @property string|null $N37_TAROS_GR Taros grupė
 * @property int|null $N37_TAROS_SVORIS Taros svoris
 * @property int|null $N37_FRAKCIJA_A Alternatyvaus matavimo frakcija
 * @property int|null $N37_FRAKCIJA Pagrindinio matavimo frakcija
 * @property int|null $N37_KOEFICI Santykis su pagrindiniu matu
 * @property float|null $N37_NETTO Prekės vieneto neto
 * @property float|null $N37_BRUTTO Prekės vieneto bruto
 * @property float|null $N37_TURIS Prekės vieneto tūris
 * @property float|null $N37_ILGIS Prekės ilgis
 * @property float|null $N37_PLOTIS Prekės plotis
 * @property float|null $N37_AUKSTIS Prekės aukštis
 * @property string|null $N37_R_DATE Kada koregavo
 * @property string|null $N37_ADDUSR Kas sukūrė
 * @property string|null $N37_USERIS Kas koregavo
 * @property int|null $N37_LAIKAS_KROV Krovimo darbų laikas
 * @property int|null $N37_ORIENTACIJA Prekės orientacija
 * @property int|null $N37_AR_VIRS  Ar transportuojant prekė dedasi ant viršaus
 * @property float|null $N37_VIRS_SVOR Koks svoris galimas ant viršaus
 * @property float|null $N37_VIRS_PAK Kiek pakuočių galima dėti vieną ant kitos
 * @property string|null $N37_KODAS_US_PAK Standartinis mat. vienetas
 * @property int|null $N37_KIEKIS_PAK Santykis su alternatyviu matu
 * @property int|null $N37_PAK_TIPAS Pakuotės tipas
 * @property float|null $N37_PAK_MASE Pakuotės masė
 * @property string|null $N37_KODAS_LS_1 Logistikos kodas 1
 * @property string|null $N37_KODAS_LS_2 Logistikos kodas 2
 * @property string|null $N37_REZERVAS Rezervas
 * @property string|null $N37_APSKRITIS Apskritis
 * @property string|null $N37_SANDORIS Sandoris
 * @property string|null $N37_SALYGOS Pristatymo sąlygos
 * @property string|null $N37_RUSIS Rūšis
 * @property string|null $N37_SALIS Šalis gavėja
 * @property string|null $N37_MATAS Mato vnt.
 * @property string|null $N37_SALIS_K Kilmės šalis
 * @property string|null $N37_VAISTO_ID Vaisto Id.
 * @method static Builder|N37Pmat whereCount($value)
 * @method static Builder|N37Pmat whereCreatedAt($value)
 * @method static Builder|N37Pmat whereDeletedAt($value)
 * @method static Builder|N37Pmat whereId($value)
 * @method static Builder|N37Pmat whereN37ADDUSR($value)
 * @method static Builder|N37Pmat whereN37APSKRITIS($value)
 * @method static Builder|N37Pmat whereN37ARVIRS($value)
 * @method static Builder|N37Pmat whereN37AUKSTIS($value)
 * @method static Builder|N37Pmat whereN37BARKODAS($value)
 * @method static Builder|N37Pmat whereN37BRUTTO($value)
 * @method static Builder|N37Pmat whereN37FRAKCIJA($value)
 * @method static Builder|N37Pmat whereN37FRAKCIJAA($value)
 * @method static Builder|N37Pmat whereN37ILGIS($value)
 * @method static Builder|N37Pmat whereN37KASOSPOZ($value)
 * @method static Builder|N37Pmat whereN37KIEKISPAK($value)
 * @method static Builder|N37Pmat whereN37KODASLS1($value)
 * @method static Builder|N37Pmat whereN37KODASLS2($value)
 * @method static Builder|N37Pmat whereN37KODASPS($value)
 * @method static Builder|N37Pmat whereN37KODASUS($value)
 * @method static Builder|N37Pmat whereN37KODASUSPAK($value)
 * @method static Builder|N37Pmat whereN37KOEFICI($value)
 * @method static Builder|N37Pmat whereN37LAIKASKROV($value)
 * @method static Builder|N37Pmat whereN37MATAS($value)
 * @method static Builder|N37Pmat whereN37NETTO($value)
 * @method static Builder|N37Pmat whereN37ORIENTACIJA($value)
 * @method static Builder|N37Pmat whereN37PAKMASE($value)
 * @method static Builder|N37Pmat whereN37PAKTIPAS($value)
 * @method static Builder|N37Pmat whereN37PAV($value)
 * @method static Builder|N37Pmat whereN37PLOTIS($value)
 * @method static Builder|N37Pmat whereN37RDATE($value)
 * @method static Builder|N37Pmat whereN37REZERVAS($value)
 * @method static Builder|N37Pmat whereN37RUSIS($value)
 * @method static Builder|N37Pmat whereN37SALIS($value)
 * @method static Builder|N37Pmat whereN37SALISK($value)
 * @method static Builder|N37Pmat whereN37SALYGOS($value)
 * @method static Builder|N37Pmat whereN37SANDORIS($value)
 * @method static Builder|N37Pmat whereN37SKSVARST($value)
 * @method static Builder|N37Pmat whereN37SVARSTPOZ($value)
 * @method static Builder|N37Pmat whereN37TAROSGR($value)
 * @method static Builder|N37Pmat whereN37TAROSSVORIS($value)
 * @method static Builder|N37Pmat whereN37TRUMPAV($value)
 * @method static Builder|N37Pmat whereN37TURIS($value)
 * @method static Builder|N37Pmat whereN37USERIS($value)
 * @method static Builder|N37Pmat whereN37VAISTOID($value)
 * @method static Builder|N37Pmat whereN37VIRSPAK($value)
 * @method static Builder|N37Pmat whereN37VIRSSVOR($value)
 * @method static Builder|N37Pmat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N37Pmat extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N37_PMAT';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N37_KODAS_PS',
        'N37_KODAS_US',
        'N37_BAR_KODAS',
        'N37_TRUM_PAV',
        'N37_PAV',
        'N37_KASOS_POZ',
        'N37_SVARST_POZ',
        'N37_SK_SVARST',
        'N37_TAROS_GR',
        'N37_TAROS_SVORIS',
        'N37_FRAKCIJA_A',
        'N37_FRAKCIJA',
        'N37_KOEFICI',
        'N37_NETTO',
        'N37_BRUTTO',
        'N37_TURIS',
        'N37_ILGIS',
        'N37_PLOTIS',
        'N37_AUKSTIS',
        'N37_R_DATE',
        'N37_ADDUSR',
        'N37_USERIS',
        'N37_LAIKAS_KROV',
        'N37_ORIENTACIJA',
        'N37_AR_VIRS',
        'N37_VIRS_SVOR',
        'N37_VIRS_PAK',
        'N37_KODAS_US_PAK',
        'N37_KIEKIS_PAK',
        'N37_PAK_TIPAS',
        'N37_PAK_MASE',
        'N37_KODAS_LS_1',
        'N37_KODAS_LS_2',
        'N37_REZERVAS',
        'N37_APSKRITIS',
        'N37_SANDORIS',
        'N37_SALYGOS',
        'N37_RUSIS',
        'N37_SALIS',
        'N37_MATAS',
        'N37_SALIS_K',
        'N37_VAISTO_ID',
    ];

}
