<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class N26Komp extends HCUuidModel
{
    protected $table = 'N26_KOMP';

    protected $fillable = ['id', 'N26_KODAS_PS', 'N26_EIL_NR', 'N26_TIPAS', 'N26_KODAS_PS_K', 'N26_KODAS_US',
        'N26_FRAKCIJA', 'N26_KIEKIS', 'N26_G_KIEKIS', 'N26_ISB_POZ', 'N26_ISEIG_PROC', 'N26_KOMP_POZ', 'N26_KREPS_POZ',
        'N26_EKSP_POZ', 'N26_KITI_POZ', 'N26_USERIS', 'N26_R_DATE', 'N26_ADDUSR', 'N26_KOMP_SVS'
    ];

}
