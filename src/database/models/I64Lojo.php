<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class I64Lojo extends HCUuidModel
{
    protected $table = 'I64_LOJO';

    protected $fillable = ['ID', 'I64_KODAS_DR', 'I64_EIL_NR', 'I64_KODAS_DL', 'I64_KODAS_WW', 'I64_OP_DATE', 'I64_PAV',
        'I64_TASKAI', 'I64_TIPAS', 'I64_KODAS_PS', 'I64_SUMA', 'I64_ADDUSR', 'I64_USERIS', 'I64_R_DATE', 'I64_KODAS_US',
        'I64_KODAS_IS', 'I64_REZERVAS1', 'I64_REZERVAS2', 'I64_REZERVAS3', 'I64_KODAS_DL_A', 'I64_ID_PAR', 'I64_ID_POS',
        'I64_KORTELES_ID'
    ];

}
