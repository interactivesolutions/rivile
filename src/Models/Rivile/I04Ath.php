<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class I04Ath extends HCUuidModel
{
    protected $table = 'I04_ATH';

    protected $fillable = [
        'id',
        'I04_KODAS_CH',
        'I04_DOK_NR',
        'I04_OP_RUSIS',
        'I04_OP_TIPAS',
        'I04_OP_STORNO',
        'I04_OP_DATA',
        'I04_KODAS_SS',
        'I04_MOKETOJAS',
        'I04_KODAS_KS',
        'I04_PAV',
        'I04_ADR',
        'I04_ATSTOVAS',
        'I04_KODAS_VS',
        'I04_SUMA',
        'I04_SUMA_DSK',
        'I04_SUMA_PLK',
        'I04_PASTABOS',
        'I04_PERKELTA',
        'I04_IMP_EXP',
        'I04_KODAS_VL',
        'I04_SUMA_VAL',
        'I04_KOEF',
        'I04_USERIS',
        'I04_R_DATE',
        'I04_ADDUSR',
        'I04_KODAS_SM',
        'I04_APRASYMAS',
        'I04_SUMA_PER',
        'I04_SUMA_WK',
        'I04_KODAS_LS_1',
        'I04_KODAS_LS_2',
        'I04_KODAS_LS_3',
        'I04_KODAS_LS_4',
        'I04_KODAS_ZN',
        'I04_BUSENA',
    ];

}
