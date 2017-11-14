<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class N40Abar extends HCUuidModel
{
    protected $table = 'N40_ABAR';

    protected $fillable = [
        'id',
        'N40_BAR_KODAS',
        'N40_KODAS_PS',
        'N40_KODAS_US',
        'N40_USERIS',
        'N40_R_DATE',
        'N40_ADDUSR',
    ];

}
