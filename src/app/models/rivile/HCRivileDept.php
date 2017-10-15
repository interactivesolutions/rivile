<?php

namespace interactivesolutions\rivile\app\models\rivile;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class HCRivileDept extends HCUuidModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'I44_SKOL';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['COUNT', 'id', 'I44_MODUL', 'I44_KODAS_OP', 'I44_EIL_NR', 'I44_TIPAS', 'I44_DOK_NR', 'I44_KODAS_KS', 'I44_KODAS_MS', 'I44_KODAS_IS', 'I44_KODAS_OS', 'I44_KODAS_OS_C', 'I44_KODAS_SS', 'I44_DATA_DOK', 'I44_DATA_MOK', 'I44_DATA_DSK', 'I44_DSK_PROC', 'I44_SUMA_DB', 'I44_SUMA_CR', 'I44_KODAS_VL', 'I44_SUMA_DB_VL', 'I44_SUMA_CR_VL', 'I44_SUMA_PLK', 'I44_SAVIKAINA', 'I44_PVM', 'I44_PASTABOS', 'I44_ADDUSR', 'I44_R_DATE', 'I44_USERIS', 'I44_KODAS_KT', 'I44_KODAS_K0'];
}