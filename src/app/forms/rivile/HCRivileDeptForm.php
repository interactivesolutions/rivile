<?php

namespace interactivesolutions\rivile\app\forms\rivile;

class HCRivileDeptForm
{
    // name of the form
    protected $formID = 'rivile-dept';

    // is form multi language
    protected $multiLanguage = 0;

    /**
     * Creating form
     *
     * @param bool $edit
     * @return array
     */
    public function createForm(bool $edit = false)
    {
        $form = [
            'storageURL' => route('admin.api.routes.rivile.dept'),
            'buttons'    => [
                [
                    "class" => "col-centered",
                    "label" => trans('HCTranslations::core.buttons.submit'),
                    "type"  => "submit",
                ],
            ],
            'structure'  => [
                [
    "type"            => "singleLine",
    "fieldID"         => "COUNT",
    "label"           => trans("Rivile::rivile_dept.COUNT"),
    "required"        => 1,
    "requiredVisible" => 1,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_MODUL",
    "label"           => trans("Rivile::rivile_dept.I44_MODUL"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_OP",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_OP"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_EIL_NR",
    "label"           => trans("Rivile::rivile_dept.I44_EIL_NR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_TIPAS",
    "label"           => trans("Rivile::rivile_dept.I44_TIPAS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_DOK_NR",
    "label"           => trans("Rivile::rivile_dept.I44_DOK_NR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_KS",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_KS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_MS",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_MS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_IS",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_IS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_OS",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_OS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_OS_C",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_OS_C"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_SS",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_SS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_DATA_DOK",
    "label"           => trans("Rivile::rivile_dept.I44_DATA_DOK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_DATA_MOK",
    "label"           => trans("Rivile::rivile_dept.I44_DATA_MOK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_DATA_DSK",
    "label"           => trans("Rivile::rivile_dept.I44_DATA_DSK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_DSK_PROC",
    "label"           => trans("Rivile::rivile_dept.I44_DSK_PROC"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_SUMA_DB",
    "label"           => trans("Rivile::rivile_dept.I44_SUMA_DB"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_SUMA_CR",
    "label"           => trans("Rivile::rivile_dept.I44_SUMA_CR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_VL",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_VL"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_SUMA_DB_VL",
    "label"           => trans("Rivile::rivile_dept.I44_SUMA_DB_VL"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_SUMA_CR_VL",
    "label"           => trans("Rivile::rivile_dept.I44_SUMA_CR_VL"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_SUMA_PLK",
    "label"           => trans("Rivile::rivile_dept.I44_SUMA_PLK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_SAVIKAINA",
    "label"           => trans("Rivile::rivile_dept.I44_SAVIKAINA"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_PVM",
    "label"           => trans("Rivile::rivile_dept.I44_PVM"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_PASTABOS",
    "label"           => trans("Rivile::rivile_dept.I44_PASTABOS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_ADDUSR",
    "label"           => trans("Rivile::rivile_dept.I44_ADDUSR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_R_DATE",
    "label"           => trans("Rivile::rivile_dept.I44_R_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_USERIS",
    "label"           => trans("Rivile::rivile_dept.I44_USERIS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_KT",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_KT"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "I44_KODAS_K0",
    "label"           => trans("Rivile::rivile_dept.I44_KODAS_K0"),
    "required"        => 0,
    "requiredVisible" => 0,
],
            ],
        ];

        if ($this->multiLanguage)
            $form['availableLanguages'] = getHCContentLanguages();

        if (!$edit)
            return $form;

        //Make changes to edit form if needed
        // $form['structure'][] = [];

        return $form;
    }
}