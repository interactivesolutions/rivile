<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class I08Part extends HCUuidModel
{
    protected $table = 'I08_PART';

    protected $fillable = [
        'id',
        'I08_KODAS_PO',
        'I08_EIL_NR',
        'I08_NUOL_D',
        'I08_NUOL_P',
        'I08_MOK_D',
        'I08_MOK_P',
        'I08_SUMA_PLK',
        'I08_R_DATE',
        'I08_USERIS',
        'I08_ADDUSR',
        'I08_MOK_S',
        'I08_PLK_P',
    ];

}
