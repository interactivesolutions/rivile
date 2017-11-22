<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

/**
 * InteractiveSolutions\Rivile\Models\N64Loj
 *
 * @property int $count
 * @property string $id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property string|null $N64_KODAS_DL Kodas
 * @property string|null $N64_DATE Data
 * @property string|null $N64_KODAS_KS Klientas
 * @property string|null $N64_PAV Pavardė
 * @property string|null $N64_VARDAS Vardas
 * @property string|null $N64_KODAS_VS Vietovė
 * @property string|null $N64_ADR1 Adresas1
 * @property string|null $N64_ADR2 Adresas2
 * @property string|null $N64_ADR3 Adresas3
 * @property string|null $N64_GIM_DATA Gimimo data
 * @property int|null $N64_LYTIS Lytis:1-vyras,2-moteris
 * @property string|null $N64_KODAS_LS_1 Logistika 1
 * @property string|null $N64_KODAS_LS_2 Logistika 2
 * @property string|null $N64_KODAS_LS_3 Logistika 3
 * @property string|null $N64_KODAS_LS_4 Logistika 4
 * @property int|null $N64_POZ_DATE Terminuota
 * @property string|null $N64_BEG_DATE Pradžios data
 * @property string|null $N64_END_DATE Pabaigos data
 * @property string|null $N64_USERIS Kas koregavo
 * @property string|null $N64_R_DATE Kada koregavo
 * @property string|null $N64_ADDUSR Kas sukūrė
 * @property string|null $N64_ASM_KODAS Asmens kodas
 * @property string|null $N64_TEL Telefono Nr.
 * @property string|null $N64_MOB_TEL Mobilus telefonas
 * @property string|null $N64_E_MAIL E-mail
 * @property string|null $N64_KORTELES_ID Kortelės ID
 * @property int|null $N64_BLOK_POZ Blokavimo požymis: 0-Ne,1-Taip
 * @property string|null $N64_BLOK_DATE Blokavimo data
 * @property string|null $N64_BLOK_USER Blokavimo vartotojas
 * @property string|null $N64_KODAS_LS_5 Logistikos kodas 5
 * @property string|null $N64_KODAS_LS_6 Logistikos kodas 6
 * @property string|null $N64_KODAS_LS_7 Logistikos kodas 7
 * @property string|null $N64_KODAS_LS_8 Logistikos kodas 8
 * @property string|null $N64_KORTELES_ID_A Pagrindinės kortelės nr.
 * @property string|null $N64_KODAS_SM Asmens kodas
 * @property int|null $N64_NEAKTYVI Neaktyvi- 0-aktyi,1-Neaktyvi
 * @property int|null $N64_KORTELES_ID_POZ Kortelių intervalo požymis
 * @property string|null $N64_KORTELES_ID_I1 Kortelių intervalo pradžia
 * @property string|null $N64_KORTELES_ID_I2 Kortelių intervalo pabaiga
 * @property string|null $N64_APRAS Aprasymas
 * @method static Builder|N64Loj whereCount($value)
 * @method static Builder|N64Loj whereCreatedAt($value)
 * @method static Builder|N64Loj whereDeletedAt($value)
 * @method static Builder|N64Loj whereId($value)
 * @method static Builder|N64Loj whereN64ADDUSR($value)
 * @method static Builder|N64Loj whereN64ADR1($value)
 * @method static Builder|N64Loj whereN64ADR2($value)
 * @method static Builder|N64Loj whereN64ADR3($value)
 * @method static Builder|N64Loj whereN64APRAS($value)
 * @method static Builder|N64Loj whereN64ASMKODAS($value)
 * @method static Builder|N64Loj whereN64BEGDATE($value)
 * @method static Builder|N64Loj whereN64BLOKDATE($value)
 * @method static Builder|N64Loj whereN64BLOKPOZ($value)
 * @method static Builder|N64Loj whereN64BLOKUSER($value)
 * @method static Builder|N64Loj whereN64DATE($value)
 * @method static Builder|N64Loj whereN64EMAIL($value)
 * @method static Builder|N64Loj whereN64ENDDATE($value)
 * @method static Builder|N64Loj whereN64GIMDATA($value)
 * @method static Builder|N64Loj whereN64KODASDL($value)
 * @method static Builder|N64Loj whereN64KODASKS($value)
 * @method static Builder|N64Loj whereN64KODASLS1($value)
 * @method static Builder|N64Loj whereN64KODASLS2($value)
 * @method static Builder|N64Loj whereN64KODASLS3($value)
 * @method static Builder|N64Loj whereN64KODASLS4($value)
 * @method static Builder|N64Loj whereN64KODASLS5($value)
 * @method static Builder|N64Loj whereN64KODASLS6($value)
 * @method static Builder|N64Loj whereN64KODASLS7($value)
 * @method static Builder|N64Loj whereN64KODASLS8($value)
 * @method static Builder|N64Loj whereN64KODASSM($value)
 * @method static Builder|N64Loj whereN64KODASVS($value)
 * @method static Builder|N64Loj whereN64KORTELESID($value)
 * @method static Builder|N64Loj whereN64KORTELESIDA($value)
 * @method static Builder|N64Loj whereN64KORTELESIDI1($value)
 * @method static Builder|N64Loj whereN64KORTELESIDI2($value)
 * @method static Builder|N64Loj whereN64KORTELESIDPOZ($value)
 * @method static Builder|N64Loj whereN64LYTIS($value)
 * @method static Builder|N64Loj whereN64MOBTEL($value)
 * @method static Builder|N64Loj whereN64NEAKTYVI($value)
 * @method static Builder|N64Loj whereN64PAV($value)
 * @method static Builder|N64Loj whereN64POZDATE($value)
 * @method static Builder|N64Loj whereN64RDATE($value)
 * @method static Builder|N64Loj whereN64TEL($value)
 * @method static Builder|N64Loj whereN64USERIS($value)
 * @method static Builder|N64Loj whereN64VARDAS($value)
 * @method static Builder|N64Loj whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class N64Loj extends HCUuidModel
{
    /**
     * @var string
     */
    protected $table = 'N64_LOJ';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'N64_KODAS_DL',
        'N64_DATE',
        'N64_KODAS_KS',
        'N64_PAV',
        'N64_VARDAS',
        'N64_KODAS_VS',
        'N64_ADR1',
        'N64_ADR2',
        'N64_ADR3',
        'N64_GIM_DATA',
        'N64_LYTIS',
        'N64_KODAS_LS_1',
        'N64_KODAS_LS_2',
        'N64_KODAS_LS_3',
        'N64_KODAS_LS_4',
        'N64_POZ_DATE',
        'N64_BEG_DATE',
        'N64_END_DATE',
        'N64_USERIS',
        'N64_R_DATE',
        'N64_ADDUSR',
        'N64_ASM_KODAS',
        'N64_TEL',
        'N64_MOB_TEL',
        'N64_E_MAIL',
        'N64_KORTELES_ID',
        'N64_BLOK_POZ',
        'N64_BLOK_DATE',
        'N64_BLOK_USER',
        'N64_KODAS_LS_5',
        'N64_KODAS_LS_6',
        'N64_KODAS_LS_7',
        'N64_KODAS_LS_8',
        'N64_KORTELES_ID_A',
        'N64_KODAS_SM',
        'N64_NEAKTYVI',
        'N64_KORTELES_ID_POZ',
        'N64_KORTELES_ID_I1',
        'N64_KORTELES_ID_I2',
        'N64_APRAS',
    ];

}
