<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class I17Vpro extends HCUuidModel
{
    protected $table = 'I17_VPRO';

    protected $fillable = [
        'id',
        'I17_KODAS_IS',
        'I17_KODAS_PS',
        'I17_KODAS_OS',
        'I17_SERIJA',
        'I17_KODAS_US_A',
        'I17_KODAS_US',
        'I17_FRAKCIJA',
        'I17_KIEKIS',
        'I17_ATIDUOTA',
        'I17_REZERVAS',
        'I17_PARD_UZS',
        'I17_PIRK_UZS',
        'I17_SUMA',
        'I17_P_PIR_K',
        'I17_P_PIR_D',
        'I17_P_PAR_K',
        'I17_P_PAR_D',
        'I17_VID_UZS',
        'I17_REIKALAVIMAS',
        'I17_KELYJE',
        'I17_KAINA',
        'I17_USERIS',
        'I17_ADDUSR',
        'I17_R_DATE',
    ];

}
