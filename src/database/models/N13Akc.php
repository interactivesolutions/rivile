<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class N13Akc extends HCUuidModel
{
    protected $table = 'N13_AKC';

    protected $fillable = ['ID', 'N13_KODAS_PS', 'N13_KODAS_US', 'N13_KODAS_IS', 'N13_EIL_NR', 'N13_DATE_PR',
        'N13_DATE_PB', 'N13_PAV', 'N13_POZ_KAINA', 'N13_KAINA1', 'N13_KIEKIS2K', 'N13_KAINA2', 'N13_KIEKIS3K',
        'N13_KAINA3', 'N13_KIEKIS4K', 'N13_KAINA4', 'N13_POZ_NUOLAIDA', 'N13_NUOLAIDA1', 'N13_KIEKIS2N', 'N13_NUOLAIDA2',
        'N13_KIEKIS3N', 'N13_NUOLAIDA3', 'N13_KIEKIS4N', 'N13_NUOLAIDA4', 'N13_KODAS_LS_1', 'N13_KODAS_LS_2',
        'N13_KODAS_LS_3', 'N13_KODAS_LS_4', 'N13_ADDUSR', 'N13_USERIS', 'N13_R_DATE', 'N13_REZERVAS'
    ];

}
