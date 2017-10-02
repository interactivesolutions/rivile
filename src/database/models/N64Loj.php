<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class N64Loj extends HCUuidModel
{
    protected $table = 'N64_LOJ';

    protected $fillable = ['id', 'N64_KODAS_DL', 'N64_DATE', 'N64_KODAS_KS', 'N64_PAV', 'N64_VARDAS', 'N64_KODAS_VS',
        'N64_ADR1', 'N64_ADR2', 'N64_ADR3', 'N64_GIM_DATA', 'N64_LYTIS', 'N64_KODAS_LS_1', 'N64_KODAS_LS_2',
        'N64_KODAS_LS_3', 'N64_KODAS_LS_4', 'N64_POZ_DATE', 'N64_BEG_DATE', 'N64_END_DATE', 'N64_USERIS', 'N64_R_DATE',
        'N64_ADDUSR', 'N64_ASM_KODAS', 'N64_TEL', 'N64_MOB_TEL', 'N64_E_MAIL', 'N64_KORTELES_ID', 'N64_BLOK_POZ',
        'N64_BLOK_DATE', 'N64_BLOK_USER', 'N64_KODAS_LS_5', 'N64_KODAS_LS_6', 'N64_KODAS_LS_7', 'N64_KODAS_LS_8',
        'N64_KORTELES_ID_A', 'N64_KODAS_SM', 'N64_NEAKTYVI', 'N64_KORTELES_ID_POZ', 'N64_KORTELES_ID_I1',
        'N64_KORTELES_ID_I2', 'N64_APRAS'];

}
