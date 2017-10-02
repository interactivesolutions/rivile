<?php namespace interactivesolutions\rivile\database\models;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class I10Vid extends HCUuidModel
{
    protected $table = 'I10_VID';

    protected $fillable = ['ID', 'I10_KODAS_VD', 'I10_EIL_NR', 'I10_KODAS_TR', 'I10_TIPAS', 'I10_PERKELTA',
        'I10_KODAS_PS', 'I10_KODAS_OS1', 'I10_SERIJA1', 'I10_KODAS_OS2', 'I10_SERIJA2', 'I10_PAV', 'I10_KODAS_US1',
        'I10_KIEKIS1', 'I10_FRAKCIJA1', 'I10_KODAS_US', 'I10_KIEKIS', 'I10_FRAKCIJA', 'I10_KODAS_US2', 'I10_KIEKIS2',
        'I10_FRAKCIJA2', 'I10_PIR_KAINA', 'I10_PARD_KAINA1', 'I10_PARD_KAINA2', 'I10_KITOS', 'I10_MUITAS', 'I10_AKCIZAS',
        'I10_SAV_VISO', 'I10_GAL_DATA', 'I10_USERIS', 'I10_R_DATE', 'I10_ADDUSR', 'I10_ADD_DATE', 'I10_KIEKIS_A',
        'I10_BAR_KODAS', 'I10_APRASYMAS1', 'I10_APRASYMAS2', 'I10_APRASYMAS3'
    ];

}
