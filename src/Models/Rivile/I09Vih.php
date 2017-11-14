<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class I09Vih extends HCUuidModel
{
    protected $table = 'I09_VIH';

    protected $fillable = [
        'id',
        'I09_KODAS_VD',
        'I09_TIPAS',
        'I09_DOK_NR',
        'I09_IS_DATA',
        'I09_GAV_POZ',
        'I09_GAV_DATA',
        'I09_KODAS_IS1',
        'I09_KODAS_SS_T',
        'I09_NUTOL1',
        'I09_EIL1',
        'I09_EIL2',
        'I09_EIL3',
        'I09_KODAS_IS2',
        'I09_NUTOL2',
        'I09_A_EIL1',
        'I09_A_EIL2',
        'I09_A_EIL3',
        'I09_PERKELTA1',
        'I09_PERKELTA2',
        'I09_IMP_EXP',
        'I09_USERIS',
        'I09_R_DATE',
        'I09_ADDUSR',
        'I09_EIL_SK',
        'I09_KODAS_SM1',
        'I09_KODAS_SM2',
        'I09_PAV',
        'I09_KODAS_MS',
        'I09_KODAS_LS_1',
        'I09_KODAS_LS_2',
        'I09_KODAS_LS_3',
        'I09_KODAS_LS_4',
        'I09_ADD_DATE',
        'I09_PER1_DATE',
        'I09_PER1_USER',
        'I09_KODAS_AU',
    ];

}
