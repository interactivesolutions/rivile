<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N08Klij
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N08_KODAS_KS Kliento kodas
 * @property int|null $N08_RUSIS Rūšis:1-pirkėjas,2-tiekėjas,3-pirkėjas/tiekėjas,4-įmonė
 * @property string|null $N08_PVM_KODAS Kliento PVM kodas
 * @property string|null $N08_IM_KODAS Kliento įmonės kodas
 * @property string|null $N08_PAV Kliento pavadinimas
 * @property string|null $N08_ADR Adresas
 * @property string|null $N08_KODAS_VS Vietovės kodas
 * @property string|null $N08_PASTAS Pašto indeksas
 * @property string|null $N08_ATSTOVAS Atstovas
 * @property string|null $N08_E_MAIL E-mail adresas
 * @property string|null $N08_FAX_NUM Fax-o numeriai
 * @property string|null $N08_TEL Telefonų numeriai
 * @property string|null $N08_MOB_TEL Mobilus telefonas
 * @property string|null $N08_KODAS_LS_1 Logistikos 1 kodas
 * @property string|null $N08_KODAS_LS_2 Logistikos 2 kodas
 * @property string|null $N08_KODAS_LS_3 Logistikos 3 kodas
 * @property string|null $N08_KODAS_LS_4 Logistikos 4 kodas
 * @property int|null $N08_TIPAS_PIRK Pirkėjo tipas:1-pagal dokumentus,2-pagal sąskaitas
 * @property int|null $N08_TIPAS_TIEK Tiekėjo tipas:1-pagal dokumentus,2-pagal sąskaitas
 * @property string|null $N08_KODAS_GS Klientų grupės kodas
 * @property float|null $N08_CREDIT_LIM Pirkėjo kredito limitas
 * @property string|null $N08_KODAS_DS Sąskaitų ryšio kodas
 * @property float|null $N08_DELSPINIGIAI Pirkėjo delspinigių procentas
 * @property string|null $N08_KODAS_QS Pranešimo kodas
 * @property string|null $N08_NUOL_GR Pirkėjo nuolaidos grupė
 * @property string|null $N08_KODAS_XS_T Tiekėjo mokesčių lentelės kodas
 * @property string|null $N08_KODAS_XS_P Pirkėjo mokesčių lentelės kodas
 * @property string|null $N08_KODAS_TS_T Tiekėjo terminų lentelės kodas
 * @property string|null $N08_KODAS_TS_P Pirkėjo terminų lentelės kodas
 * @property string|null $N08_ADD_DATE Sukūrimo laikas
 * @property int|null $N08_SUTARTIS Ar kontroliuoti pirkėjo sutarčių sąlygas:0-ne,1-taip
 * @property int|null $N08_KAIN_ABC Ar kontroliuoti pirkėjo sutarčių sąlygas:0-ne,1-taip
 * @property int|null $N08_DIENOS Rezervas
 * @property int|null $N08_TIEK_DIEN Ar būtinai reikalinga tiekėjo sutartis:0-ne,1-taip
 * @property int|null $N08_KRED_LIM Ar kontroliuoti pirkėjo kredito limitą atliekant pardavimus:0-ne,1-taip
 * @property int|null $N08_PRIEDAI Ar kontroliuoti tiekėjo sutarčių sąlygas:0-ne,1-taip
 * @property string|null $N08_KODAS_IS Klientui priskirtas padalinio kodas
 * @property string|null $N08_KODAS_OS_P Klientui priskirtas pardavimų centro kodas
 * @property string|null $N08_KODAS_OS Klientui priskirtas objekto kodas
 * @property string|null $N08_KODAS_MS_P Menedžerio pardavėjo kodas
 * @property string|null $N08_KODAS_MS_T Menedžerio pirkėjo kodas
 * @property int|null $N08_VAL_POZ Ar galima atsiskaitinėti valiuta:0-ne,1-taip
 * @property string|null $N08_KODAS_VL_1 Atsiskaitymų valiutos kodas 1
 * @property string|null $N08_KODAS_VL_2 Atsiskaitymų valiutos kodas 2
 * @property string|null $N08_KODAS_VL_3 Atsiskaitymų valiutos kodas 3
 * @property string|null $N08_KODAS_VL_4 Atsiskaitymų valiutos kodas 4
 * @property string|null $N08_KODAS_VL_5 Atsiskaitymų valiutos kodas 5
 * @property string|null $N08_KODAS_VL_6 Atsiskaitymų valiutos kodas 6
 * @property int|null $N08_POZ_DATE Terminuotas0-ne,1-taip
 * @property string|null $N08_BEG_DATE Pradžios data
 * @property string|null $N08_END_DATE Pabaigos data
 * @property string|null $N08_ADDUSR Kas sukūrė
 * @property string|null $N08_USERIS Kas koregavo
 * @property string|null $N08_R_DATE Koregavimo laikas
 * @property int|null $N08_GER_POZ Ar nepatikrintas
 * @property string|null $N08_KODAS_LS_5 Logistikos kodas 5
 * @property string|null $N08_KODAS_LS_6 Logistikos kodas 6
 * @property string|null $N08_KODAS_LS_7 Logistikos kodas 7
 * @property string|null $N08_KODAS_LS_8 Logistikos kodas 8
 * @property int|null $N08_T_LIM_POZ Tiekėjo kredito limito požymis
 * @property float|null $N08_T_KRED_LIM Tiekėjo kredito limitas
 * @property string|null $N08_KODAS_VL_LIM Tiekėjo limito valiuta
 * @property string|null $N08_KAINYNAS Kainynas
 * @property int|null $N08_AR_REIK_P Ar reikalauti kredito limito
 * @property int|null $N08_AR_REIK_T Ar reikalauti kredito limito (tiekėjui)
 * @property string|null $N08_REZERVAS Trumpas įmonės aprašymas
 * @property int|null $N08_INTRASTAT Intrastat ataskaitos: 0-Ne, 1-Taip
 * @property int|null $N08_WB_KR Ar sekamas WB įsipareigojimai: 0-ne, 1-Taip
 * @property int|null $N08_WB_KR_GR Ar griežta WB kredito kontrolė: 0-Ne,1-Taip
 * @property float|null $N08_SUMA_WK_LIMIT WB Kredito limito suma
 * @property float|null $N08_SUMA_WK Įsipareigojimų pradinė suma
 * @property string|null $N08_KODAS_VL_U Užsakymų formavimo valiuta
 * @method static Builder|N08Klij whereCount($value)
 * @method static Builder|N08Klij whereCreatedAt($value)
 * @method static Builder|N08Klij whereDeletedAt($value)
 * @method static Builder|N08Klij whereId($value)
 * @method static Builder|N08Klij whereN08ADDDATE($value)
 * @method static Builder|N08Klij whereN08ADDUSR($value)
 * @method static Builder|N08Klij whereN08ADR($value)
 * @method static Builder|N08Klij whereN08ARREIKP($value)
 * @method static Builder|N08Klij whereN08ARREIKT($value)
 * @method static Builder|N08Klij whereN08ATSTOVAS($value)
 * @method static Builder|N08Klij whereN08BEGDATE($value)
 * @method static Builder|N08Klij whereN08CREDITLIM($value)
 * @method static Builder|N08Klij whereN08DELSPINIGIAI($value)
 * @method static Builder|N08Klij whereN08DIENOS($value)
 * @method static Builder|N08Klij whereN08EMAIL($value)
 * @method static Builder|N08Klij whereN08ENDDATE($value)
 * @method static Builder|N08Klij whereN08FAXNUM($value)
 * @method static Builder|N08Klij whereN08GERPOZ($value)
 * @method static Builder|N08Klij whereN08IMKODAS($value)
 * @method static Builder|N08Klij whereN08INTRASTAT($value)
 * @method static Builder|N08Klij whereN08KAINABC($value)
 * @method static Builder|N08Klij whereN08KAINYNAS($value)
 * @method static Builder|N08Klij whereN08KODASDS($value)
 * @method static Builder|N08Klij whereN08KODASGS($value)
 * @method static Builder|N08Klij whereN08KODASIS($value)
 * @method static Builder|N08Klij whereN08KODASKS($value)
 * @method static Builder|N08Klij whereN08KODASLS1($value)
 * @method static Builder|N08Klij whereN08KODASLS2($value)
 * @method static Builder|N08Klij whereN08KODASLS3($value)
 * @method static Builder|N08Klij whereN08KODASLS4($value)
 * @method static Builder|N08Klij whereN08KODASLS5($value)
 * @method static Builder|N08Klij whereN08KODASLS6($value)
 * @method static Builder|N08Klij whereN08KODASLS7($value)
 * @method static Builder|N08Klij whereN08KODASLS8($value)
 * @method static Builder|N08Klij whereN08KODASMSP($value)
 * @method static Builder|N08Klij whereN08KODASMST($value)
 * @method static Builder|N08Klij whereN08KODASOS($value)
 * @method static Builder|N08Klij whereN08KODASOSP($value)
 * @method static Builder|N08Klij whereN08KODASQS($value)
 * @method static Builder|N08Klij whereN08KODASTSP($value)
 * @method static Builder|N08Klij whereN08KODASTST($value)
 * @method static Builder|N08Klij whereN08KODASVL1($value)
 * @method static Builder|N08Klij whereN08KODASVL2($value)
 * @method static Builder|N08Klij whereN08KODASVL3($value)
 * @method static Builder|N08Klij whereN08KODASVL4($value)
 * @method static Builder|N08Klij whereN08KODASVL5($value)
 * @method static Builder|N08Klij whereN08KODASVL6($value)
 * @method static Builder|N08Klij whereN08KODASVLLIM($value)
 * @method static Builder|N08Klij whereN08KODASVLU($value)
 * @method static Builder|N08Klij whereN08KODASVS($value)
 * @method static Builder|N08Klij whereN08KODASXSP($value)
 * @method static Builder|N08Klij whereN08KODASXST($value)
 * @method static Builder|N08Klij whereN08KREDLIM($value)
 * @method static Builder|N08Klij whereN08MOBTEL($value)
 * @method static Builder|N08Klij whereN08NUOLGR($value)
 * @method static Builder|N08Klij whereN08PASTAS($value)
 * @method static Builder|N08Klij whereN08PAV($value)
 * @method static Builder|N08Klij whereN08POZDATE($value)
 * @method static Builder|N08Klij whereN08PRIEDAI($value)
 * @method static Builder|N08Klij whereN08PVMKODAS($value)
 * @method static Builder|N08Klij whereN08RDATE($value)
 * @method static Builder|N08Klij whereN08REZERVAS($value)
 * @method static Builder|N08Klij whereN08RUSIS($value)
 * @method static Builder|N08Klij whereN08SUMAWK($value)
 * @method static Builder|N08Klij whereN08SUMAWKLIMIT($value)
 * @method static Builder|N08Klij whereN08SUTARTIS($value)
 * @method static Builder|N08Klij whereN08TEL($value)
 * @method static Builder|N08Klij whereN08TIEKDIEN($value)
 * @method static Builder|N08Klij whereN08TIPASPIRK($value)
 * @method static Builder|N08Klij whereN08TIPASTIEK($value)
 * @method static Builder|N08Klij whereN08TKREDLIM($value)
 * @method static Builder|N08Klij whereN08TLIMPOZ($value)
 * @method static Builder|N08Klij whereN08USERIS($value)
 * @method static Builder|N08Klij whereN08VALPOZ($value)
 * @method static Builder|N08Klij whereN08WBKR($value)
 * @method static Builder|N08Klij whereN08WBKRGR($value)
 * @method static Builder|N08Klij whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N08Klij extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N08_KLIJ';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N08_KODAS_KS',
        'N08_RUSIS',
        'N08_PVM_KODAS',
        'N08_IM_KODAS',
        'N08_PAV',
        'N08_ADR',
        'N08_KODAS_VS',
        'N08_PASTAS',
        'N08_ATSTOVAS',
        'N08_E_MAIL',
        'N08_FAX_NUM',
        'N08_TEL',
        'N08_MOB_TEL',
        'N08_KODAS_LS_1',
        'N08_KODAS_LS_2',
        'N08_KODAS_LS_3',
        'N08_KODAS_LS_4',
        'N08_TIPAS_PIRK',
        'N08_TIPAS_TIEK',
        'N08_KODAS_GS',
        'N08_CREDIT_LIM',
        'N08_KODAS_DS',
        'N08_DELSPINIGIAI',
        'N08_KODAS_QS',
        'N08_NUOL_GR',
        'N08_KODAS_XS_T',
        'N08_KODAS_XS_P',
        'N08_KODAS_TS_T',
        'N08_KODAS_TS_P',
        'N08_ADD_DATE',
        'N08_SUTARTIS',
        'N08_KAIN_ABC',
        'N08_DIENOS',
        'N08_TIEK_DIEN',
        'N08_KRED_LIM',
        'N08_PRIEDAI',
        'N08_KODAS_IS',
        'N08_KODAS_OS_P',
        'N08_KODAS_OS',
        'N08_KODAS_MS_P',
        'N08_KODAS_MS_T',
        'N08_VAL_POZ',
        'N08_KODAS_VL_1',
        'N08_KODAS_VL_2',
        'N08_KODAS_VL_3',
        'N08_KODAS_VL_4',
        'N08_KODAS_VL_5',
        'N08_KODAS_VL_6',
        'N08_POZ_DATE',
        'N08_BEG_DATE',
        'N08_END_DATE',
        'N08_ADDUSR',
        'N08_USERIS',
        'N08_R_DATE',
        'N08_GER_POZ',
        'N08_KODAS_LS_5',
        'N08_KODAS_LS_6',
        'N08_KODAS_LS_7',
        'N08_KODAS_LS_8',
        'N08_T_LIM_POZ',
        'N08_T_KRED_LIM',
        'N08_KODAS_VL_LIM',
        'N08_KAINYNAS',
        'N08_AR_REIK_P',
        'N08_AR_REIK_T',
        'N08_REZERVAS',
        'N08_INTRASTAT',
        'N08_WB_KR',
        'N08_WB_KR_GR',
        'N08_SUMA_WK_LIMIT',
        'N08_SUMA_WK',
        'N08_KODAS_VL_U',
    ];

}
