<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class I06Parh extends HCUuidModel
{
    protected $table = 'I06_PARH';

    protected $fillable = ['id', 'CREATED_AT', 'UPDATED_AT', 'DELETED_AT', 'I06_KODAS_PO',
        'I06_OP_TIP', 'I06_VAL_POZ', 'I06_PVM_TIP', 'I06_OP_STORNO', 'I06_DOK_NR',
        'I06_OP_DATA', 'I06_DOK_DATA', 'I06_KODAS_MS', 'I06_KODAS_KS', 'I06_KODAS_SS',
        'I06_PAV', 'I06_ADR', 'I06_ATSTOVAS', 'I06_KODAS_VS', 'I06_PAV2', 'I06_ADR2',
        'I06_ADR3', 'I06_KODAS_VL', 'I06_KODAS_XS', 'I06_KODAS_SS_P', 'I06_PASTABOS',
        'I06_MOK_DOK', 'I06_MOK_SUMA', 'I06_KODAS_SS_M', 'I06_SUMA_VAL', 'I06_SUMA',
        'I06_SUMA_PVM', 'I06_KURSAS', 'I06_PERKELTA', 'I06_ADDUSR', 'I06_R_DATE',
        'I06_USERIS', 'I06_KODAS_AU', 'I06_KODAS_SM', 'I06_INTRASTAT', 'I06_DOK_REG',
        'I06_KODAS_AK', 'I06_SUMA_WK', 'I06_KODAS_LS_1', 'I06_KODAS_LS_2', 'I06_KODAS_LS_3',
        'I06_KODAS_LS_4', 'I06_VAL_POZ_PVM', 'I06_PVM_VAL', 'I06_WEB_POZ', 'I06_WEB_ATAS',
        'I06_WEB_PERKELTA', 'I06_APRASYMAS1', 'I06_APRASYMAS2', 'I06_APRASYMAS3'
    ];

}
