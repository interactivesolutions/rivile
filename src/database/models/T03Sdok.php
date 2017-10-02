<?php namespace app\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class T03Sdok extends HCUuidModel
{
    protected $table = 'T03_SDOK';

    protected $fillable = ['ID', 'T03_KODAS_KS', 'T03_DOK_NR', 'T03_DATA_MOK', 'T03_KODAS_VL', 'T03_DATA_DOK',
        'T03_DATA_DSK', 'T03_SUMA_DB_VL', 'T03_SUMA_CR_VL', 'T03_SUMA_DB', 'T03_SUMA_CR', 'T03_DSK_PROC', 'T03_SUMA_PLK',
        'T03_USERIS', 'T03_R_DATE'
    ];

}
