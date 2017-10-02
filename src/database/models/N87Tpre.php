<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class N87Tpre extends HCUuidModel
{
    protected $table = 'N87_TPRE';

    protected $fillable = ['ID', 'N87_KODAS_PS', 'N87_KODAS_US', 'N87_KODAS_KS', 'N87_PAV', 'N87_KODAS',
        'N87_APRASYMAS', 'N87_EIL1', 'N87_EIL2', 'N87_EIL3', 'N87_NUM1', 'N87_NUM2', 'N87_NUM3', 'N87_USERIS',
        'N87_R_DATE', 'N87_ADDUSR'
    ];

}
