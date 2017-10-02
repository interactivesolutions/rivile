<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class I05Atd extends HCUuidModel
{
    protected $table = 'I05_ATD';

    protected $fillable = ['ID', 'I05_KODAS_CH', 'I05_EIL_NR', 'I05_DOK_NR', 'I05_DATA_DOK', 'I05_DATA_MOK',
        'I05_DATA_DSK', 'I05_APR', 'I05_SUMA', 'I05_SUMA_DSK', 'I05_SUMA_PLK', 'I05_KODAS_SS', 'I05_KODAS_VL',
        'I05_KODAS_VL_S', 'I05_SUMA_VAL_DSK', 'I05_KOEF', 'I05_KOEF_S', 'I05_SUMA_VAL', 'I05_SUMA_VAL_S',
        'I05_KODAS_IS', 'I05_KODAS_OS', 'I05_KODAS_OS_C', 'I05_KODAS_MS', 'I05_USERIS', 'I05_R_DATE', 'I05_ADDUSR',
        'I05_KODAS_KT', 'I05_KODAS_K0', 'I05_SUMA_PER'
    ];

}
