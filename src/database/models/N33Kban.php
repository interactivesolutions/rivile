<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class N33Kban extends HCUuidModel
{
    protected $table = 'N33_KBAN';

    protected $fillable = ['ID', 'N33_KODAS_KS', 'N33_EIL_NR', 'N33_PAV', 'N33_ADRESAS', 'N33_KODAS_VS', 'N33_FAX',
        'N33_TEL', 'N33_PAST_KODAS', 'N33_SHIP_VIA', 'N33_SHIP_FOB', 'N33_NUTYL', 'N33_KODAS_WS', 'N33_S_KODAS',
        'N33_SWIFT', 'N33_KODAS_WS_K', 'N33_KSWIFT', 'N33_K_SASK', 'N33_USERIS', 'N33_R_DATE', 'N33_ADDUSR',
        'N33_KODAS_SS', 'N33_KODAS_AK', 'N33_WEB_ADR', 'N33_WEB_POZ', 'N33_WEB_ATAS', 'N33_WEB_SERV', 'N33_WEB_POZT',
        'N33_WEB_POZI', 'N33_WEB_ADRI', 'N33_KODAS_LS_1', 'N33_KODAS_LS_2', 'N33_KODAS_LS_3', 'N33_KODAS_LS_4'
    ];

}
