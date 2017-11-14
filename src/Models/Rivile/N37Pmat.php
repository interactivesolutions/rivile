<?php

namespace InteractiveSolutions\Rivile\Models;

use InteractiveSolutions\HoneycombCore\Models\HCUuidModel;

class N37Pmat extends HCUuidModel
{
    protected $table = 'N37_PMAT';

    protected $fillable = [
        'id',
        'N37_KODAS_PS',
        'N37_KODAS_US',
        'N37_BAR_KODAS',
        'N37_TRUM_PAV',
        'N37_PAV',
        'N37_KASOS_POZ',
        'N37_SVARST_POZ',
        'N37_SK_SVARST',
        'N37_TAROS_GR',
        'N37_TAROS_SVORIS',
        'N37_FRAKCIJA_A',
        'N37_FRAKCIJA',
        'N37_KOEFICI',
        'N37_NETTO',
        'N37_BRUTTO',
        'N37_TURIS',
        'N37_ILGIS',
        'N37_PLOTIS',
        'N37_AUKSTIS',
        'N37_R_DATE',
        'N37_ADDUSR',
        'N37_USERIS',
        'N37_LAIKAS_KROV',
        'N37_ORIENTACIJA',
        'N37_AR_VIRS',
        'N37_VIRS_SVOR',
        'N37_VIRS_PAK',
        'N37_KODAS_US_PAK',
        'N37_KIEKIS_PAK',
        'N37_PAK_TIPAS',
        'N37_PAK_MASE',
        'N37_KODAS_LS_1',
        'N37_KODAS_LS_2',
        'N37_REZERVAS',
        'N37_APSKRITIS',
        'N37_SANDORIS',
        'N37_SALYGOS',
        'N37_RUSIS',
        'N37_SALIS',
        'N37_MATAS',
        'N37_SALIS_K',
        'N37_VAISTO_ID',
    ];

}
