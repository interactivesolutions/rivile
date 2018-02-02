<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\I07Pard
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $I07_KODAS_PO Operacijos numeris
 * @property int|null $I07_EIL_NR Eilutės numeris operacijoje
 * @property int|null $I07_TIPAS Tipas:1-prekė,2-paslauga,3-kodas,4-pranesimas,5-aprašymas
 * @property string|null $I07_KODAS Prekės, paslaugos,... kodas
 * @property string|null $I07_PAV Prekės, paslaugos,... pavadinimas
 * @property string|null $I07_KODAS_TR Transporto dokumento numeris
 * @property string|null $I07_KODAS_IS Padalinio kodas
 * @property string|null $I07_KODAS_OS Objekto kodas
 * @property string|null $I07_KODAS_OS_C Pardavimo centro kodas
 * @property string|null $I07_SERIJA Serija
 * @property string|null $I07_KODAS_US Pagrindinio matavimo vieneto kodas
 * @property int|null $I07_KIEKIS Kiekis pagrindiniu matavimo vienetu
 * @property int|null $I07_FRAKCIJA Pagrindinio matavimo vnt. frakcija
 * @property string|null $I07_KODAS_US_P Pajamavimo alternatyvus matavimo vieneto kodas
 * @property string|null $I07_KODAS_US_A Pardavimo alternatyvus matavimo vieneto kodas
 * @property int|null $I07_ALT_KIEKIS Alternatyvaus matavimo kiekis
 * @property int|null $I07_ALT_FRAK Alternatyvaus kiekio frakcija
 * @property float|null $I07_VAL_KAINA Kaina valiuta
 * @property float|null $I07_SUMA_VAL Valiutos suma
 * @property float|null $I07_KAINA_BE Kaina be PVM
 * @property float|null $I07_KAINA_SU Kaina su PVM
 * @property float|null $I07_NUOLAIDA Nuolaidos procentas
 * @property int|null $I07_ISLAIDU_M Ar skaičiuoti nuo išlaidų PVM:0-ne,1-taip
 * @property float|null $I07_ISLAIDOS Išlaidos
 * @property float|null $I07_ISLAIDOS_PVM PVM nuo išlaidų
 * @property int|null $I07_MUITAS_M Ar skaičiuoti nuo muitų PVM:0-ne,1-taip
 * @property float|null $I07_MUITAS Muito suma
 * @property float|null $I07_MUITAS_PVM PVM nuo muito
 * @property int|null $I07_AKCIZAS_M Ar skaičiuoti nuo akcizo PVM:0-ne,1-taip
 * @property float|null $I07_AKCIZAS Akcizas
 * @property float|null $I07_AKCIZAS_PVM PVM nuo akcizas
 * @property int|null $I07_MOKESTIS Ar skaičiuoti PVM:0-ne,1-taip
 * @property float|null $I07_MOKESTIS_P PVM procentas
 * @property float|null $I07_PVM PVM suma
 * @property float|null $I07_SUMA Suma be PVM
 * @property float|null $I07_PAR_KAINA Pardavimo kaina sistemoje
 * @property float|null $I07_PAR_KAINA_N Nauja pardavimo kaina
 * @property float|null $I07_MOK_SUMA Eilė
 * @property float|null $I07_SAVIKAINA Savikainos suma
 * @property string|null $I07_GALIOJA_IKI Prekės galiojimo terminas
 * @property int|null $I07_PERKELTA Perkėlimo požymis:1-neperkelta,2-perkelta
 * @property string|null $I07_ADDUSR Kas sukūrė
 * @property string|null $I07_USERIS Kas koregavo
 * @property string|null $I07_R_DATE Koregavimo laikas
 * @property string|null $I07_SERTIFIKATAS Sertifikato kodas
 * @property string|null $I07_KODAS_KT Sutarties numeris
 * @property string|null $I07_KODAS_K0 Sutarties priedas
 * @property string|null $I07_KODAS_KV Krovinio kodas
 * @property string|null $I07_KODAS_VZ Vežimo kodas
 * @property string|null $I07_ADD_DATE Eilutės sukūrimo laikas
 * @property string|null $I07_APSKRITIS Apskritis
 * @property string|null $I07_SANDORIS Sandoris
 * @property string|null $I07_SALYGOS Pristatymo sąlygos
 * @property string|null $I07_RUSIS Rūšis
 * @property string|null $I07_SALIS Šalis gavėja
 * @property string|null $I07_MATAS Mato vnt.
 * @property string|null $I07_SALIS_K Kilmės šalis
 * @property float|null $I07_MASE Intrastate masė
 * @property float|null $I07_INT_KIEKIS Intrastate kiekis
 * @property float|null $I07_PVM_VAL PVM valiuta
 * @property string|null $I07_KODAS_KS Tiekėjo kodas
 * @property float|null $I07_KIEKIS_A Alternatyvus kiekis(naudojamas tik informacijos įdėjimui per webservisą)
 * @property string|null $I07_BAR_KODAS Bar_kodas(naudojamas tik informacijos įdėjimui per webservisą)
 * @property string|null $I07_APRASYMAS1 Aprašymo laukas 1
 * @property string|null $I07_APRASYMAS2 Aprašymo laukas 2
 * @property string|null $I07_APRASYMAS3 Aprašymo laukas 3
 * @method static Builder|I07Pard whereCount($value)
 * @method static Builder|I07Pard whereCreatedAt($value)
 * @method static Builder|I07Pard whereDeletedAt($value)
 * @method static Builder|I07Pard whereI07ADDDATE($value)
 * @method static Builder|I07Pard whereI07ADDUSR($value)
 * @method static Builder|I07Pard whereI07AKCIZAS($value)
 * @method static Builder|I07Pard whereI07AKCIZASM($value)
 * @method static Builder|I07Pard whereI07AKCIZASPVM($value)
 * @method static Builder|I07Pard whereI07ALTFRAK($value)
 * @method static Builder|I07Pard whereI07ALTKIEKIS($value)
 * @method static Builder|I07Pard whereI07APRASYMAS1($value)
 * @method static Builder|I07Pard whereI07APRASYMAS2($value)
 * @method static Builder|I07Pard whereI07APRASYMAS3($value)
 * @method static Builder|I07Pard whereI07APSKRITIS($value)
 * @method static Builder|I07Pard whereI07BARKODAS($value)
 * @method static Builder|I07Pard whereI07EILNR($value)
 * @method static Builder|I07Pard whereI07FRAKCIJA($value)
 * @method static Builder|I07Pard whereI07GALIOJAIKI($value)
 * @method static Builder|I07Pard whereI07INTKIEKIS($value)
 * @method static Builder|I07Pard whereI07ISLAIDOS($value)
 * @method static Builder|I07Pard whereI07ISLAIDOSPVM($value)
 * @method static Builder|I07Pard whereI07ISLAIDUM($value)
 * @method static Builder|I07Pard whereI07KAINABE($value)
 * @method static Builder|I07Pard whereI07KAINASU($value)
 * @method static Builder|I07Pard whereI07KIEKIS($value)
 * @method static Builder|I07Pard whereI07KIEKISA($value)
 * @method static Builder|I07Pard whereI07KODAS($value)
 * @method static Builder|I07Pard whereI07KODASIS($value)
 * @method static Builder|I07Pard whereI07KODASK0($value)
 * @method static Builder|I07Pard whereI07KODASKS($value)
 * @method static Builder|I07Pard whereI07KODASKT($value)
 * @method static Builder|I07Pard whereI07KODASKV($value)
 * @method static Builder|I07Pard whereI07KODASOS($value)
 * @method static Builder|I07Pard whereI07KODASOSC($value)
 * @method static Builder|I07Pard whereI07KODASPO($value)
 * @method static Builder|I07Pard whereI07KODASTR($value)
 * @method static Builder|I07Pard whereI07KODASUS($value)
 * @method static Builder|I07Pard whereI07KODASUSA($value)
 * @method static Builder|I07Pard whereI07KODASUSP($value)
 * @method static Builder|I07Pard whereI07KODASVZ($value)
 * @method static Builder|I07Pard whereI07MASE($value)
 * @method static Builder|I07Pard whereI07MATAS($value)
 * @method static Builder|I07Pard whereI07MOKESTIS($value)
 * @method static Builder|I07Pard whereI07MOKESTISP($value)
 * @method static Builder|I07Pard whereI07MOKSUMA($value)
 * @method static Builder|I07Pard whereI07MUITAS($value)
 * @method static Builder|I07Pard whereI07MUITASM($value)
 * @method static Builder|I07Pard whereI07MUITASPVM($value)
 * @method static Builder|I07Pard whereI07NUOLAIDA($value)
 * @method static Builder|I07Pard whereI07PARKAINA($value)
 * @method static Builder|I07Pard whereI07PARKAINAN($value)
 * @method static Builder|I07Pard whereI07PAV($value)
 * @method static Builder|I07Pard whereI07PERKELTA($value)
 * @method static Builder|I07Pard whereI07PVM($value)
 * @method static Builder|I07Pard whereI07PVMVAL($value)
 * @method static Builder|I07Pard whereI07RDATE($value)
 * @method static Builder|I07Pard whereI07RUSIS($value)
 * @method static Builder|I07Pard whereI07SALIS($value)
 * @method static Builder|I07Pard whereI07SALISK($value)
 * @method static Builder|I07Pard whereI07SALYGOS($value)
 * @method static Builder|I07Pard whereI07SANDORIS($value)
 * @method static Builder|I07Pard whereI07SAVIKAINA($value)
 * @method static Builder|I07Pard whereI07SERIJA($value)
 * @method static Builder|I07Pard whereI07SERTIFIKATAS($value)
 * @method static Builder|I07Pard whereI07SUMA($value)
 * @method static Builder|I07Pard whereI07SUMAVAL($value)
 * @method static Builder|I07Pard whereI07TIPAS($value)
 * @method static Builder|I07Pard whereI07USERIS($value)
 * @method static Builder|I07Pard whereI07VALKAINA($value)
 * @method static Builder|I07Pard whereId($value)
 * @method static Builder|I07Pard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class I07Pard extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'I07_PARD';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'I07_KODAS_PO',
        'I07_EIL_NR',
        'I07_TIPAS',
        'I07_KODAS',
        'I07_PAV',
        'I07_KODAS_TR',
        'I07_KODAS_IS',
        'I07_KODAS_OS',
        'I07_KODAS_OS_C',
        'I07_SERIJA',
        'I07_KODAS_US',
        'I07_KIEKIS',
        'I07_FRAKCIJA',
        'I07_KODAS_US_P',
        'I07_KODAS_US_A',
        'I07_ALT_KIEKIS',
        'I07_ALT_FRAK',
        'I07_VAL_KAINA',
        'I07_SUMA_VAL',
        'I07_KAINA_BE',
        'I07_KAINA_SU',
        'I07_NUOLAIDA',
        'I07_ISLAIDU_M',
        'I07_ISLAIDOS',
        'I07_ISLAIDOS_PVM',
        'I07_MUITAS_M',
        'I07_MUITAS',
        'I07_MUITAS_PVM',
        'I07_AKCIZAS_M',
        'I07_AKCIZAS',
        'I07_AKCIZAS_PVM',
        'I07_MOKESTIS',
        'I07_MOKESTIS_P',
        'I07_PVM',
        'I07_SUMA',
        'I07_PAR_KAINA',
        'I07_PAR_KAINA_N',
        'I07_MOK_SUMA',
        'I07_SAVIKAINA',
        'I07_GALIOJA_IKI',
        'I07_PERKELTA',
        'I07_ADDUSR',
        'I07_USERIS',
        'I07_R_DATE',
        'I07_SERTIFIKATAS',
        'I07_KODAS_KT',
        'I07_KODAS_K0',
        'I07_KODAS_KV',
        'I07_KODAS_VZ',
        'I07_ADD_DATE',
        'I07_APSKRITIS',
        'I07_SANDORIS',
        'I07_SALYGOS',
        'I07_RUSIS',
        'I07_SALIS',
        'I07_MATAS',
        'I07_SALIS_K',
        'I07_MASE',
        'I07_INT_KIEKIS',
        'I07_PVM_VAL',
        'I07_KODAS_KS',
        'I07_KIEKIS_A',
        'I07_BAR_KODAS',
        'I07_APRASYMAS1',
        'I07_APRASYMAS2',
        'I07_APRASYMAS3',
    ];

}
