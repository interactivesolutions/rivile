<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models\Rivile;

use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\Rivile\N33Kban
 *
 * @property int $count
 * @property string $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property string|null $N33_KODAS_KS Kliento kodas
 * @property int|null $N33_EIL_NR Detalios eilutės numeris
 * @property string|null $N33_PAV Alternatyvus pavadinimas
 * @property string|null $N33_ADRESAS Adresas
 * @property string|null $N33_KODAS_VS Vietovės kodas
 * @property string|null $N33_FAX Fax - numeriai
 * @property string|null $N33_TEL Telefono numeriai
 * @property string|null $N33_PAST_KODAS Pašto kodas
 * @property string|null $N33_SHIP_VIA Pristatymo būdas
 * @property string|null $N33_SHIP_FOB Pristatymo sąlygos
 * @property int|null $N33_NUTYL Adresas ir bankiniai rekvizitai pagal nutylėjimą
 * @property string|null $N33_KODAS_WS Banko kodas
 * @property string|null $N33_S_KODAS Sąskaitos kodas
 * @property string|null $N33_SWIFT Sąskaitos/Banko swift-as
 * @property string|null $N33_KODAS_WS_K Korespondetinio banko kodas
 * @property string|null $N33_KSWIFT Korespondentinio banko swift-as
 * @property string|null $N33_K_SASK Korespondentinio banko sąskaita
 * @property string|null $N33_USERIS Kas koregavo
 * @property string|null $N33_R_DATE Kada koregavo
 * @property string|null $N33_ADDUSR Kas sukūrė
 * @property string|null $N33_KODAS_SS Sąskaitos kodas
 * @property string|null $N33_KODAS_AK Kliento alternatyvus kodas
 * @property string|null $N33_WEB_ADR Web adresas
 * @property int|null $N33_WEB_POZ Web požymis
 * @property string|null $N33_WEB_ATAS Web ataskaita
 * @property int|null $N33_WEB_SERV Web servisas
 * @property int|null $N33_WEB_POZT Tiesioginis apsikeitimas
 * @property int|null $N33_WEB_POZI Internetinis apsikeitimas
 * @property string|null $N33_WEB_ADRI Internetinis adresas
 * @property string|null $N33_KODAS_LS_1 Logistikos 1 kodas
 * @property string|null $N33_KODAS_LS_2 Logistikos 2 kodas
 * @property string|null $N33_KODAS_LS_3 Logistikos 3 kodas
 * @property string|null $N33_KODAS_LS_4 Logistikos 4 kodas
 * @property string|null $N33_KODAS_MS Menedžerio kodas
 * @property string|null $N33_SALIS_K Šalies kodas
 * @method static Builder|N33Kban whereCount($value)
 * @method static Builder|N33Kban whereCreatedAt($value)
 * @method static Builder|N33Kban whereDeletedAt($value)
 * @method static Builder|N33Kban whereId($value)
 * @method static Builder|N33Kban whereN33ADDUSR($value)
 * @method static Builder|N33Kban whereN33ADRESAS($value)
 * @method static Builder|N33Kban whereN33EILNR($value)
 * @method static Builder|N33Kban whereN33FAX($value)
 * @method static Builder|N33Kban whereN33KODASAK($value)
 * @method static Builder|N33Kban whereN33KODASKS($value)
 * @method static Builder|N33Kban whereN33KODASLS1($value)
 * @method static Builder|N33Kban whereN33KODASLS2($value)
 * @method static Builder|N33Kban whereN33KODASLS3($value)
 * @method static Builder|N33Kban whereN33KODASLS4($value)
 * @method static Builder|N33Kban whereN33KODASMS($value)
 * @method static Builder|N33Kban whereN33KODASSS($value)
 * @method static Builder|N33Kban whereN33KODASVS($value)
 * @method static Builder|N33Kban whereN33KODASWS($value)
 * @method static Builder|N33Kban whereN33KODASWSK($value)
 * @method static Builder|N33Kban whereN33KSASK($value)
 * @method static Builder|N33Kban whereN33KSWIFT($value)
 * @method static Builder|N33Kban whereN33NUTYL($value)
 * @method static Builder|N33Kban whereN33PASTKODAS($value)
 * @method static Builder|N33Kban whereN33PAV($value)
 * @method static Builder|N33Kban whereN33RDATE($value)
 * @method static Builder|N33Kban whereN33SALISK($value)
 * @method static Builder|N33Kban whereN33SHIPFOB($value)
 * @method static Builder|N33Kban whereN33SHIPVIA($value)
 * @method static Builder|N33Kban whereN33SKODAS($value)
 * @method static Builder|N33Kban whereN33SWIFT($value)
 * @method static Builder|N33Kban whereN33TEL($value)
 * @method static Builder|N33Kban whereN33USERIS($value)
 * @method static Builder|N33Kban whereN33WEBADR($value)
 * @method static Builder|N33Kban whereN33WEBADRI($value)
 * @method static Builder|N33Kban whereN33WEBATAS($value)
 * @method static Builder|N33Kban whereN33WEBPOZ($value)
 * @method static Builder|N33Kban whereN33WEBPOZI($value)
 * @method static Builder|N33Kban whereN33WEBPOZT($value)
 * @method static Builder|N33Kban whereN33WEBSERV($value)
 * @method static Builder|N33Kban whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N33Kban extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N33_KBAN';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N33_KODAS_KS',
        'N33_EIL_NR',
        'N33_PAV',
        'N33_ADRESAS',
        'N33_KODAS_VS',
        'N33_FAX',
        'N33_TEL',
        'N33_PAST_KODAS',
        'N33_SHIP_VIA',
        'N33_SHIP_FOB',
        'N33_NUTYL',
        'N33_KODAS_WS',
        'N33_S_KODAS',
        'N33_SWIFT',
        'N33_KODAS_WS_K',
        'N33_KSWIFT',
        'N33_K_SASK',
        'N33_USERIS',
        'N33_R_DATE',
        'N33_ADDUSR',
        'N33_KODAS_SS',
        'N33_KODAS_AK',
        'N33_WEB_ADR',
        'N33_WEB_POZ',
        'N33_WEB_ATAS',
        'N33_WEB_SERV',
        'N33_WEB_POZT',
        'N33_WEB_POZI',
        'N33_WEB_ADRI',
        'N33_KODAS_LS_1',
        'N33_KODAS_LS_2',
        'N33_KODAS_LS_3',
        'N33_KODAS_LS_4',
    ];

}
