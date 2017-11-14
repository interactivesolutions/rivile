<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class N32Pabc extends HCUuidModel
{
    protected $table = 'N32_PABC';

    protected $fillable = [
        'id',
        'N32_KODAS_PS',
        'N32_KODAS_US',
        'N32_TIPAS',
        'N32_G_DATE',
        'N32_KAINA1',
        'N32_KAINA2',
        'N32_KIEKIS2',
        'N32_KAINA3',
        'N32_KIEKIS3',
        'N32_KAINA4',
        'N32_KIEKIS4',
        'N32_USERIS',
        'N32_R_DATE',
        'N32_ADDUSR',
        'N32_ID',
    ];

}
