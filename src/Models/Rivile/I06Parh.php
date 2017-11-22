<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\I06Parh
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I06_KODAS_PO Operacijos numeris
 * @property int|null $I06_OP_TIP Tipas: pirkimų (1-V,2-G,3-U,4-P) pardavimų (51-V,52-G,53-U,54-R,55-P,56-POS)
 * @property int|null $I06_VAL_POZ Ar valiutinis dokumentas?:0-ne,1-taip
 * @property int|null $I06_PVM_TIP Kainos su PVM:0-ne,1-taip
 * @property int|null $I06_OP_STORNO Nekoreguojama operacija:0-ne,1-taip
 * @property string|null $I06_DOK_NR Dokumento numeris
 * @property string|null $I06_OP_DATA Operacijos data
 * @property string|null $I06_DOK_DATA Dokumento data/Galiojimo data
 * @property string|null $I06_KODAS_MS Menedžerio kodas
 * @property string|null $I06_KODAS_KS Kliento kodas
 * @property string|null $I06_KODAS_SS Pinigų sąskaitos kodas
 * @property string|null $I06_PAV Kliento pavadinimas
 * @property string|null $I06_ADR Kliento adresas
 * @property string|null $I06_ATSTOVAS Atstovas
 * @property string|null $I06_KODAS_VS Vietovės kodas
 * @property string|null $I06_PAV2 Pristatymo pavadinimas
 * @property string|null $I06_ADR2 Pristatymo adresas 1
 * @property string|null $I06_ADR3 Pristatymo adresas 2
 * @property string|null $I06_KODAS_VL Valiutos kodas
 * @property string|null $I06_KODAS_XS Mokesčio kodas
 * @property string|null $I06_KODAS_SS_P Skolos sąskaita
 * @property string|null $I06_PASTABOS Pastabos
 * @property string|null $I06_MOK_DOK Mokėjimo dokumento numeris
 * @property float|null $I06_MOK_SUMA Apmokėjimo požymis:0-ne,1-taip
 * @property string|null $I06_KODAS_SS_M Rezervas
 * @property float|null $I06_SUMA_VAL Valiutos suma
 * @property float|null $I06_SUMA Suma be PVM
 * @property float|null $I06_SUMA_PVM PVM suma
 * @property float|null $I06_KURSAS Valiutos kursas
 * @property int|null $I06_PERKELTA Perkėlimo požymis:1-neperkelta,2-perkelta,3-koreguota
 * @property string|null $I06_ADDUSR Kas sukūrė
 * @property string|null $I06_R_DATE Koregavimo laikas
 * @property string|null $I06_USERIS Kas koregavimo
 * @property string|null $I06_KODAS_AU Automobilio kodas
 * @property string|null $I06_KODAS_SM Asmuo
 * @property int|null $I06_INTRASTAT Intrastat ataskaitos: 0-Ne, 1-Taip
 * @property string|null $I06_DOK_REG Dokumentas registre
 * @property string|null $I06_KODAS_AK Kliento alternatyvus kodas
 * @property float|null $I06_SUMA_WK WB įsipareigojimų suma
 * @property string|null $I06_KODAS_LS_1 Logistika 1
 * @property string|null $I06_KODAS_LS_2 Logistika 2
 * @property string|null $I06_KODAS_LS_3 Logistika 3
 * @property string|null $I06_KODAS_LS_4 Logistika 4
 * @property int|null $I06_VAL_POZ_PVM PVM valiuta požymis
 * @property float|null $I06_PVM_VAL PVM valiuta
 * @property int|null $I06_WEB_POZ Web požymis
 * @property string|null $I06_WEB_ATAS Web Ataskaita
 * @property int|null $I06_WEB_PERKELTA Web perkelta
 * @property string|null $I06_APRASYMAS1 Aprašymo laukas 1
 * @property string|null $I06_APRASYMAS2 Aprašymo laukas 2
 * @property string|null $I06_APRASYMAS3 Aprašymo laukas 3
 * @method static Builder|I06Parh whereCount($value)
 * @method static Builder|I06Parh whereCreatedAt($value)
 * @method static Builder|I06Parh whereDeletedAt($value)
 * @method static Builder|I06Parh whereI06ADDUSR($value)
 * @method static Builder|I06Parh whereI06ADR($value)
 * @method static Builder|I06Parh whereI06ADR2($value)
 * @method static Builder|I06Parh whereI06ADR3($value)
 * @method static Builder|I06Parh whereI06APRASYMAS1($value)
 * @method static Builder|I06Parh whereI06APRASYMAS2($value)
 * @method static Builder|I06Parh whereI06APRASYMAS3($value)
 * @method static Builder|I06Parh whereI06ATSTOVAS($value)
 * @method static Builder|I06Parh whereI06DOKDATA($value)
 * @method static Builder|I06Parh whereI06DOKNR($value)
 * @method static Builder|I06Parh whereI06DOKREG($value)
 * @method static Builder|I06Parh whereI06INTRASTAT($value)
 * @method static Builder|I06Parh whereI06KODASAK($value)
 * @method static Builder|I06Parh whereI06KODASAU($value)
 * @method static Builder|I06Parh whereI06KODASKS($value)
 * @method static Builder|I06Parh whereI06KODASLS1($value)
 * @method static Builder|I06Parh whereI06KODASLS2($value)
 * @method static Builder|I06Parh whereI06KODASLS3($value)
 * @method static Builder|I06Parh whereI06KODASLS4($value)
 * @method static Builder|I06Parh whereI06KODASMS($value)
 * @method static Builder|I06Parh whereI06KODASPO($value)
 * @method static Builder|I06Parh whereI06KODASSM($value)
 * @method static Builder|I06Parh whereI06KODASSS($value)
 * @method static Builder|I06Parh whereI06KODASSSM($value)
 * @method static Builder|I06Parh whereI06KODASSSP($value)
 * @method static Builder|I06Parh whereI06KODASVL($value)
 * @method static Builder|I06Parh whereI06KODASVS($value)
 * @method static Builder|I06Parh whereI06KODASXS($value)
 * @method static Builder|I06Parh whereI06KURSAS($value)
 * @method static Builder|I06Parh whereI06MOKDOK($value)
 * @method static Builder|I06Parh whereI06MOKSUMA($value)
 * @method static Builder|I06Parh whereI06OPDATA($value)
 * @method static Builder|I06Parh whereI06OPSTORNO($value)
 * @method static Builder|I06Parh whereI06OPTIP($value)
 * @method static Builder|I06Parh whereI06PASTABOS($value)
 * @method static Builder|I06Parh whereI06PAV($value)
 * @method static Builder|I06Parh whereI06PAV2($value)
 * @method static Builder|I06Parh whereI06PERKELTA($value)
 * @method static Builder|I06Parh whereI06PVMTIP($value)
 * @method static Builder|I06Parh whereI06PVMVAL($value)
 * @method static Builder|I06Parh whereI06RDATE($value)
 * @method static Builder|I06Parh whereI06SUMA($value)
 * @method static Builder|I06Parh whereI06SUMAPVM($value)
 * @method static Builder|I06Parh whereI06SUMAVAL($value)
 * @method static Builder|I06Parh whereI06SUMAWK($value)
 * @method static Builder|I06Parh whereI06USERIS($value)
 * @method static Builder|I06Parh whereI06VALPOZ($value)
 * @method static Builder|I06Parh whereI06VALPOZPVM($value)
 * @method static Builder|I06Parh whereI06WEBATAS($value)
 * @method static Builder|I06Parh whereI06WEBPERKELTA($value)
 * @method static Builder|I06Parh whereI06WEBPOZ($value)
 * @method static Builder|I06Parh whereId($value)
 * @method static Builder|I06Parh whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I06Parh extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I06_PARH';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'CREATED_AT',
        'UPDATED_AT',
        'DELETED_AT',
        'I06_KODAS_PO',
        'I06_OP_TIP',
        'I06_VAL_POZ',
        'I06_PVM_TIP',
        'I06_OP_STORNO',
        'I06_DOK_NR',
        'I06_OP_DATA',
        'I06_DOK_DATA',
        'I06_KODAS_MS',
        'I06_KODAS_KS',
        'I06_KODAS_SS',
        'I06_PAV',
        'I06_ADR',
        'I06_ATSTOVAS',
        'I06_KODAS_VS',
        'I06_PAV2',
        'I06_ADR2',
        'I06_ADR3',
        'I06_KODAS_VL',
        'I06_KODAS_XS',
        'I06_KODAS_SS_P',
        'I06_PASTABOS',
        'I06_MOK_DOK',
        'I06_MOK_SUMA',
        'I06_KODAS_SS_M',
        'I06_SUMA_VAL',
        'I06_SUMA',
        'I06_SUMA_PVM',
        'I06_KURSAS',
        'I06_PERKELTA',
        'I06_ADDUSR',
        'I06_R_DATE',
        'I06_USERIS',
        'I06_KODAS_AU',
        'I06_KODAS_SM',
        'I06_INTRASTAT',
        'I06_DOK_REG',
        'I06_KODAS_AK',
        'I06_SUMA_WK',
        'I06_KODAS_LS_1',
        'I06_KODAS_LS_2',
        'I06_KODAS_LS_3',
        'I06_KODAS_LS_4',
        'I06_VAL_POZ_PVM',
        'I06_PVM_VAL',
        'I06_WEB_POZ',
        'I06_WEB_ATAS',
        'I06_WEB_PERKELTA',
        'I06_APRASYMAS1',
        'I06_APRASYMAS2',
        'I06_APRASYMAS3',
    ];

}
