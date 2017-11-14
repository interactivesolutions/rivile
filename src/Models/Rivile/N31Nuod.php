<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class N31Nuod extends HCUuidModel
{
    protected $table = 'N31_NUOD';

    protected $fillable = [
        'id',
        'N31_KODAS_NS',
        'N31_EIL_NR',
        'N31_MINIMUM',
        'N31_NUOL_PROC',
        'N31_USERIS',
        'N31_R_DATE',
        'N31_ADDUSR',
    ];

}
