<?php namespace app\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class I13Pamo extends HCUuidModel
{
    protected $table = 'I13_PAMO';

    protected $fillable = ['ID', 'I13_KODAS_PO', 'I13_EIL_NR', 'I13_KODAS_SS', 'I13_SUMA', 'I13_SUMA_VAL', 'I13_PAV',
        'I13_ADDUSR', 'I13_USERIS', 'I13_R_DATE'
    ];

}
