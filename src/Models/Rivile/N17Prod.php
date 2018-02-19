<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N17Prod
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N17_KODAS_PS Prekės kodas
 * @property int|null $N17_TIPAS Tipas:1-prekė,2-paslauga
 * @property string|null $N17_KODAS_P1 Pirmas alternatyvus kodas
 * @property string|null $N17_KODAS_P2 Antras alternatyvus kodas
 * @property string|null $N17_KODAS_US Pagrindinis matavimo vieneto kodas
 * @property string|null $N17_PAV Pavadinimas
 * @property string|null $N17_PAVU Pavadinimas kita kalba
 * @property string|null $N17_KODAS_KS Tiekėjo kodas
 * @property string|null $N17_KOD_T Kodas tiekėjo kataloguose
 * @property string|null $N17_KODAS_KS1 Pirmas alternatyvus tiekėjo kodas
 * @property string|null $N17_KOD_T1 Kodas pirmo alternatyvaus tiekėjo kataloguose
 * @property string|null $N17_KODAS_KS2 Antras alternatyvus tiekėjo kodas
 * @property string|null $N17_KOD_T2 Kodas antro alternatyvaus tiekėjo kataloguose
 * @property string|null $N17_KODAS_VS Vietovės kodas
 * @property string|null $N17_KODAS_ES Sezono kodas
 * @property float|null $N17_UZSIGUL Prekės užsigulėjimo procentas
 * @property int|null $N17_BAZ_KIEKIS Metų bazinis(vidutinis) kiekis
 * @property int|null $N17_ASSEMBLY Rūšis:1-paprasta,2-komplektuojama,3-išskaidoma,4-generuojama,5-sudėtinė
 * @property string|null $N17_KODAS_LS_1 Logistikos 1 kodas
 * @property string|null $N17_KODAS_LS_2 Logistikos 2 kodas
 * @property string|null $N17_KODAS_LS_3 Logistikos 3 kodas
 * @property string|null $N17_KODAS_LS_4 Logistikos 4 kodas
 * @property string|null $N17_KODAS_DS Sąskaitos ryšio kodas
 * @property string|null $N17_NUOL_GR Nuolaidos grupė
 * @property int|null $N17_GALIOJA Galiojimo dienos
 * @property int|null $N17_MOKESTIS Ar prekė apmokestinama:0-ne,1-taip
 * @property int|null $N17_TAX PVM mokestis,1-A,2-B,3-C,4-D
 * @property string|null $N17_KODAS_KS_G Prekės gamintojo kodas
 * @property string|null $N17_KODAS_GS Grupės kodas
 * @property int|null $N17_INSTR_POZ Ar reikia instrukcijos prekei?:0-ne,1-taip
 * @property string|null $N17_INSTR_TIP Instrukcijos tipas
 * @property int|null $N17_INSTR_VYK Ar reikia daryti instrukciją?:0-ne,1-taip
 * @property string|null $N17_INSTR_DATE Instrukcijos data
 * @property string|null $N17_INSTR_FILE Instrukcijos failo pavadinimas
 * @property int|null $N17_URM_POZ Urmo pozymis:0-ne,1-taip
 * @property string|null $N17_URM_DATEIN Pateko į urmą
 * @property string|null $N17_URM_DATEOU Iškrito iš urmo
 * @property int|null $N17_KREPS_POZ Ar krepšelio prekė:0-ne,1-taip
 * @property string|null $N17_KREPS_KTG Krepšelio kategorija
 * @property int|null $N17_KREPS_MIN Krepšelio minimumas
 * @property int|null $N17_GARANT_POZ Ar yra garantija:0-ne,1-taip
 * @property int|null $N17_GARANT_MEN Garantija mėnesiais
 * @property string|null $N17_KODAS_KS3 Garantija atlieka tiekėjas. Kliento kodas
 * @property int|null $N17_TEMPER_POZ Temperatūros požymis:0-ne,1-taip
 * @property int|null $N17_TEMPER_MAX Max temperatūra
 * @property int|null $N17_TEMPER_MIN Min temperatūra
 * @property string|null $N17_TEMPER_TXT Kitos laikymo sąlygos
 * @property int|null $N17_SERTIF_POZ Ar reikia sertifikato:0-ne,1-taip
 * @property string|null $N17_KODAS_MS Marketologo kodas(iš menedžerių sąrašo)
 * @property float|null $N17_ANTKAINIS Antkainio procentas
 * @property float|null $N17_MAX_NUOL Maksimalus nuolaidos procentas parduodant
 * @property int|null $N17_EX_IM_FRAC Rezervas
 * @property int|null $N17_G_TIME Rezervas
 * @property string|null $N17_KODAS_OS Objekto kodas
 * @property int|null $N17_VAZ_LAIK Vežimo laikas
 * @property int|null $N17_UZS_LAIK Užsakymo laikas
 * @property int|null $N17_PAP_LAIK Papildomas laikas
 * @property float|null $N17_SAN_COST Sandėliavimo sąnaudos
 * @property float|null $N17_UZS_COST Užsakymo sąnaudos
 * @property float|null $N17_TRA_COST Transportavimo sąnaudos
 * @property string|null $N17_MEN_PAV Pavadinimas skirtas menedžeriams
 * @property string|null $N17_MUIT_KOD Muitinėje prekės kodas
 * @property int|null $N17_SK_KODAS Prekės skyrius kasoje
 * @property int|null $N17_INTERNET Interneto požymis:0-ne,1-taip
 * @property int|null $N17_DUM_POZ Ar užsigulėjusi prekė:0-ne,1-taip
 * @property string|null $N17_DUM_TIP Užsigulėjimo tipas
 * @property string|null $N17_DUM_D_IN Kada pateko į užsigulėjimą
 * @property string|null $N17_DUM_D_OUT Kada iškrito iš išsigulėjimo
 * @property float|null $N17_MUITO_PROC Muito procentas
 * @property float|null $N17_AKCIZO_PROC Akcizo procentas
 * @property string|null $N17_PASTABOS Pastabos
 * @property int|null $N17_POZ_DATE Terminuota:0-ne,1-taip
 * @property string|null $N17_BEG_DATE Termino pradžia
 * @property string|null $N17_END_DATE Termino pabaiga
 * @property string|null $N17_USERIS Kas koregavo
 * @property string|null $N17_R_DATE Kada koregavo
 * @property string|null $N17_ADD_DATE Kada sukurta kortelė
 * @property string|null $N17_ADDUSR Kas sukūrė
 * @property int|null $N17_MIN_VISO Minimumas įmonės mastu
 * @property string|null $N17_SERT_POZ Sertifikavimo požymis
 * @property string|null $N17_KAT_POZ Kategorijos požymis
 * @property int|null $N17_BROK_POZ Broko požymis
 * @property string|null $N17_KODAS_PS_G Geras prekės kodas
 * @property string|null $N17_DATA_BR Iki kada brokas
 * @property string|null $N17_KODAS_VS_T Šalis tiekėja
 * @property string|null $N17_KODAS_MS_A Analitikas
 * @property string|null $N17_KODAS_MS_M Menedžeris
 * @property int|null $N17_AR_NAUJA Ar nauja prekė
 * @property string|null $N17_DATA_NAUJA Iki kada nauja
 * @property float|null $N17_MIN_ANTK Minimalus antkainis
 * @property string|null $N17_KODAS_LS_5 Logistikos kodas 5
 * @property string|null $N17_KODAS_LS_6 Logistikos kodas 6
 * @property string|null $N17_KODAS_LS_7 Logistikos kodas 7
 * @property string|null $N17_KODAS_LS_8 Logistikos kodas 8
 * @property float|null $N17_MIN_ANTK_UR Minimalus urminių kainų antkainis
 * @property string|null $N17_MIN_ANTK_UR_D Minimalaus urminio antkainio galiojimas
 * @property float|null $N17_MAX_ANTK Maksimalus antkainis
 * @property int|null $N17_SVS_GALIOJA SVS-e būtina galiojimo data
 * @property int|null $N17_SVS_GALIOJA_D SVS galiojimo dienos
 * @property int|null $N17_SVS_PARTIJA SVS būtina partija: 0-Ne,1-Taip
 * @property string|null $N17_PAV_K1 Pavadinimas kita kalba 1
 * @property string|null $N17_PAV_K2 Pavadinimas kita kalba 2
 * @property string|null $N17_PAV_K3 Pavadinimas kita kalba 3
 * @property-read \Illuminate\Database\Eloquent\Collection|I17Vpro[] $i17Vpro
 * @method static Builder|N17Prod whereCount($value)
 * @method static Builder|N17Prod whereCreatedAt($value)
 * @method static Builder|N17Prod whereDeletedAt($value)
 * @method static Builder|N17Prod whereId($value)
 * @method static Builder|N17Prod whereN17ADDDATE($value)
 * @method static Builder|N17Prod whereN17ADDUSR($value)
 * @method static Builder|N17Prod whereN17AKCIZOPROC($value)
 * @method static Builder|N17Prod whereN17ANTKAINIS($value)
 * @method static Builder|N17Prod whereN17ARNAUJA($value)
 * @method static Builder|N17Prod whereN17ASSEMBLY($value)
 * @method static Builder|N17Prod whereN17BAZKIEKIS($value)
 * @method static Builder|N17Prod whereN17BEGDATE($value)
 * @method static Builder|N17Prod whereN17BROKPOZ($value)
 * @method static Builder|N17Prod whereN17DATABR($value)
 * @method static Builder|N17Prod whereN17DATANAUJA($value)
 * @method static Builder|N17Prod whereN17DUMDIN($value)
 * @method static Builder|N17Prod whereN17DUMDOUT($value)
 * @method static Builder|N17Prod whereN17DUMPOZ($value)
 * @method static Builder|N17Prod whereN17DUMTIP($value)
 * @method static Builder|N17Prod whereN17ENDDATE($value)
 * @method static Builder|N17Prod whereN17EXIMFRAC($value)
 * @method static Builder|N17Prod whereN17GALIOJA($value)
 * @method static Builder|N17Prod whereN17GARANTMEN($value)
 * @method static Builder|N17Prod whereN17GARANTPOZ($value)
 * @method static Builder|N17Prod whereN17GTIME($value)
 * @method static Builder|N17Prod whereN17INSTRDATE($value)
 * @method static Builder|N17Prod whereN17INSTRFILE($value)
 * @method static Builder|N17Prod whereN17INSTRPOZ($value)
 * @method static Builder|N17Prod whereN17INSTRTIP($value)
 * @method static Builder|N17Prod whereN17INSTRVYK($value)
 * @method static Builder|N17Prod whereN17INTERNET($value)
 * @method static Builder|N17Prod whereN17KATPOZ($value)
 * @method static Builder|N17Prod whereN17KODASDS($value)
 * @method static Builder|N17Prod whereN17KODASES($value)
 * @method static Builder|N17Prod whereN17KODASGS($value)
 * @method static Builder|N17Prod whereN17KODASKS($value)
 * @method static Builder|N17Prod whereN17KODASKS1($value)
 * @method static Builder|N17Prod whereN17KODASKS2($value)
 * @method static Builder|N17Prod whereN17KODASKS3($value)
 * @method static Builder|N17Prod whereN17KODASKSG($value)
 * @method static Builder|N17Prod whereN17KODASLS1($value)
 * @method static Builder|N17Prod whereN17KODASLS2($value)
 * @method static Builder|N17Prod whereN17KODASLS3($value)
 * @method static Builder|N17Prod whereN17KODASLS4($value)
 * @method static Builder|N17Prod whereN17KODASLS5($value)
 * @method static Builder|N17Prod whereN17KODASLS6($value)
 * @method static Builder|N17Prod whereN17KODASLS7($value)
 * @method static Builder|N17Prod whereN17KODASLS8($value)
 * @method static Builder|N17Prod whereN17KODASMS($value)
 * @method static Builder|N17Prod whereN17KODASMSA($value)
 * @method static Builder|N17Prod whereN17KODASMSM($value)
 * @method static Builder|N17Prod whereN17KODASOS($value)
 * @method static Builder|N17Prod whereN17KODASP1($value)
 * @method static Builder|N17Prod whereN17KODASP2($value)
 * @method static Builder|N17Prod whereN17KODASPS($value)
 * @method static Builder|N17Prod whereN17KODASPSG($value)
 * @method static Builder|N17Prod whereN17KODASUS($value)
 * @method static Builder|N17Prod whereN17KODASVS($value)
 * @method static Builder|N17Prod whereN17KODASVST($value)
 * @method static Builder|N17Prod whereN17KODT($value)
 * @method static Builder|N17Prod whereN17KODT1($value)
 * @method static Builder|N17Prod whereN17KODT2($value)
 * @method static Builder|N17Prod whereN17KREPSKTG($value)
 * @method static Builder|N17Prod whereN17KREPSMIN($value)
 * @method static Builder|N17Prod whereN17KREPSPOZ($value)
 * @method static Builder|N17Prod whereN17MAXANTK($value)
 * @method static Builder|N17Prod whereN17MAXNUOL($value)
 * @method static Builder|N17Prod whereN17MENPAV($value)
 * @method static Builder|N17Prod whereN17MINANTK($value)
 * @method static Builder|N17Prod whereN17MINANTKUR($value)
 * @method static Builder|N17Prod whereN17MINANTKURD($value)
 * @method static Builder|N17Prod whereN17MINVISO($value)
 * @method static Builder|N17Prod whereN17MOKESTIS($value)
 * @method static Builder|N17Prod whereN17MUITKOD($value)
 * @method static Builder|N17Prod whereN17MUITOPROC($value)
 * @method static Builder|N17Prod whereN17NUOLGR($value)
 * @method static Builder|N17Prod whereN17PAPLAIK($value)
 * @method static Builder|N17Prod whereN17PASTABOS($value)
 * @method static Builder|N17Prod whereN17PAV($value)
 * @method static Builder|N17Prod whereN17PAVK1($value)
 * @method static Builder|N17Prod whereN17PAVK2($value)
 * @method static Builder|N17Prod whereN17PAVK3($value)
 * @method static Builder|N17Prod whereN17PAVU($value)
 * @method static Builder|N17Prod whereN17POZDATE($value)
 * @method static Builder|N17Prod whereN17RDATE($value)
 * @method static Builder|N17Prod whereN17SANCOST($value)
 * @method static Builder|N17Prod whereN17SERTIFPOZ($value)
 * @method static Builder|N17Prod whereN17SERTPOZ($value)
 * @method static Builder|N17Prod whereN17SKKODAS($value)
 * @method static Builder|N17Prod whereN17SVSGALIOJA($value)
 * @method static Builder|N17Prod whereN17SVSGALIOJAD($value)
 * @method static Builder|N17Prod whereN17SVSPARTIJA($value)
 * @method static Builder|N17Prod whereN17TAX($value)
 * @method static Builder|N17Prod whereN17TEMPERMAX($value)
 * @method static Builder|N17Prod whereN17TEMPERMIN($value)
 * @method static Builder|N17Prod whereN17TEMPERPOZ($value)
 * @method static Builder|N17Prod whereN17TEMPERTXT($value)
 * @method static Builder|N17Prod whereN17TIPAS($value)
 * @method static Builder|N17Prod whereN17TRACOST($value)
 * @method static Builder|N17Prod whereN17URMDATEIN($value)
 * @method static Builder|N17Prod whereN17URMDATEOU($value)
 * @method static Builder|N17Prod whereN17URMPOZ($value)
 * @method static Builder|N17Prod whereN17USERIS($value)
 * @method static Builder|N17Prod whereN17UZSCOST($value)
 * @method static Builder|N17Prod whereN17UZSIGUL($value)
 * @method static Builder|N17Prod whereN17UZSLAIK($value)
 * @method static Builder|N17Prod whereN17VAZLAIK($value)
 * @method static Builder|N17Prod whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N17Prod extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N17_PROD';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N17_KODAS_PS',
        'N17_TIPAS',
        'N17_KODAS_P1',
        'N17_KODAS_P2',
        'N17_KODAS_US',
        'N17_PAV',
        'N17_PAVU',
        'N17_KODAS_KS',
        'N17_KOD_T',
        'N17_KODAS_KS1',
        'N17_KOD_T1',
        'N17_KODAS_KS2',
        'N17_KOD_T2',
        'N17_KODAS_VS',
        'N17_KODAS_ES',
        'N17_UZSIGUL',
        'N17_BAZ_KIEKIS',
        'N17_ASSEMBLY',
        'N17_KODAS_LS_1',
        'N17_KODAS_LS_2',
        'N17_KODAS_LS_3',
        'N17_KODAS_LS_4',
        'N17_KODAS_DS',
        'N17_NUOL_GR',
        'N17_GALIOJA',
        'N17_MOKESTIS',
        'N17_TAX',
        'N17_KODAS_KS_G',
        'N17_KODAS_GS',
        'N17_INSTR_POZ',
        'N17_INSTR_TIP',
        'N17_INSTR_VYK',
        'N17_INSTR_DATE',
        'N17_INSTR_FILE',
        'N17_URM_POZ',
        'N17_URM_DATEIN',
        'N17_URM_DATEOU',
        'N17_KREPS_POZ',
        'N17_KREPS_KTG',
        'N17_KREPS_MIN',
        'N17_GARANT_POZ',
        'N17_GARANT_MEN',
        'N17_KODAS_KS3',
        'N17_TEMPER_POZ',
        'N17_TEMPER_MAX',
        'N17_TEMPER_MIN',
        'N17_TEMPER_TXT',
        'N17_SERTIF_POZ',
        'N17_KODAS_MS',
        'N17_ANTKAINIS',
        'N17_MAX_NUOL',
        'N17_EX_IM_FRAC',
        'N17_G_TIME',
        'N17_KODAS_OS',
        'N17_VAZ_LAIK',
        'N17_UZS_LAIK',
        'N17_PAP_LAIK',
        'N17_SAN_COST',
        'N17_UZS_COST',
        'N17_TRA_COST',
        'N17_MEN_PAV',
        'N17_MUIT_KOD',
        'N17_SK_KODAS',
        'N17_INTERNET',
        'N17_DUM_POZ',
        'N17_DUM_TIP',
        'N17_DUM_D_IN',
        'N17_DUM_D_OUT',
        'N17_MUITO_PROC',
        'N17_AKCIZO_PROC',
        'N17_PASTABOS',
        'N17_POZ_DATE',
        'N17_BEG_DATE',
        'N17_END_DATE',
        'N17_USERIS',
        'N17_R_DATE',
        'N17_ADD_DATE',
        'N17_ADDUSR',
        'N17_MIN_VISO',
        'N17_SERT_POZ',
        'N17_KAT_POZ',
        'N17_BROK_POZ',
        'N17_KODAS_PS_G',
        'N17_DATA_BR',
        'N17_KODAS_VS_T',
        'N17_KODAS_MS_A',
        'N17_KODAS_MS_M',
        'N17_AR_NAUJA',
        'N17_DATA_NAUJA',
        'N17_MIN_ANTK',
        'N17_KODAS_LS_5',
        'N17_KODAS_LS_6',
        'N17_KODAS_LS_7',
        'N17_KODAS_LS_8',
        'N17_MIN_ANTK_UR',
        'N17_MIN_ANTK_UR_D',
        'N17_MAX_ANTK',
        'N17_SVS_GALIOJA',
        'N17_SVS_GALIOJA_D',
        'N17_SVS_PARTIJA',
        'N17_PAV_K1',
        'N17_PAV_K2',
        'N17_PAV_K3',
    ];

    /**
     * @return HasMany
     */
    public function i17Vpro(): HasMany
    {
        return $this->hasMany(I17Vpro::class, 'I17_KODAS_PS', 'N17_KODAS_PS');
    }
}
