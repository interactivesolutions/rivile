<?php

namespace interactivesolutions\rivile\app\forms\rivile;

use interactivesolutions\rivile\database\models\N08Klij;

class HCRivileClientsForm
{
    // name of the form
    protected $formID = 'rivile-clients';

    // is form multi language
    protected $multiLanguage = 1;

    /**
     * Creating form
     *
     * @param bool $edit
     * @return array
     */
    public function createForm (bool $edit = false)
    {
        $form = [
            'storageURL' => route('admin.api.routes.rivile.clients'),
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
                    "fieldID"         => "N08_KODAS_KS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_KS"),
                    "required"        => 1,
                    "requiredVisible" => 1,
                ], [
                    "type"            => "dropDownList",
                    "fieldID"         => "N08_KODAS_DS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_DS"),
                    "required"        => 1,
                    "requiredVisible" => 1,
                    "search" => [
                        "maximumSelectionLength" => 1
                    ],
                    "options"         => $this->get_N08_KODAS_DS()
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_RUSIS",
                    "label"           => trans("Rivile::rivile_clients.N08_RUSIS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_PVM_KODAS",
                    "label"           => trans("Rivile::rivile_clients.N08_PVM_KODAS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_IM_KODAS",
                    "label"           => trans("Rivile::rivile_clients.N08_IM_KODAS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_PAV",
                    "label"           => trans("Rivile::rivile_clients.N08_PAV"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_ADR",
                    "label"           => trans("Rivile::rivile_clients.N08_ADR"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_PASTAS",
                    "label"           => trans("Rivile::rivile_clients.N08_PASTAS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_ATSTOVAS",
                    "label"           => trans("Rivile::rivile_clients.N08_ATSTOVAS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_E_MAIL",
                    "label"           => trans("Rivile::rivile_clients.N08_E_MAIL"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_FAX_NUM",
                    "label"           => trans("Rivile::rivile_clients.N08_FAX_NUM"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_TEL",
                    "label"           => trans("Rivile::rivile_clients.N08_TEL"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_MOB_TEL",
                    "label"           => trans("Rivile::rivile_clients.N08_MOB_TEL"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_1",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_1"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_2",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_2"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_3",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_3"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_4",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_4"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_TIPAS_PIRK",
                    "label"           => trans("Rivile::rivile_clients.N08_TIPAS_PIRK"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_TIPAS_TIEK",
                    "label"           => trans("Rivile::rivile_clients.N08_TIPAS_TIEK"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_GS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_GS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_CREDIT_LIM",
                    "label"           => trans("Rivile::rivile_clients.N08_CREDIT_LIM"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ],  [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_DELSPINIGIAI",
                    "label"           => trans("Rivile::rivile_clients.N08_DELSPINIGIAI"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_QS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_QS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_NUOL_GR",
                    "label"           => trans("Rivile::rivile_clients.N08_NUOL_GR"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_XS_T",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_XS_T"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_XS_P",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_XS_P"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_TS_T",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_TS_T"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_TS_P",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_TS_P"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_ADD_DATE",
                    "label"           => trans("Rivile::rivile_clients.N08_ADD_DATE"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_SUTARTIS",
                    "label"           => trans("Rivile::rivile_clients.N08_SUTARTIS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KAIN_ABC",
                    "label"           => trans("Rivile::rivile_clients.N08_KAIN_ABC"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_DIENOS",
                    "label"           => trans("Rivile::rivile_clients.N08_DIENOS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_TIEK_DIEN",
                    "label"           => trans("Rivile::rivile_clients.N08_TIEK_DIEN"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KRED_LIM",
                    "label"           => trans("Rivile::rivile_clients.N08_KRED_LIM"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_PRIEDAI",
                    "label"           => trans("Rivile::rivile_clients.N08_PRIEDAI"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_IS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_IS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_OS_P",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_OS_P"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_OS",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_OS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_MS_P",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_MS_P"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_MS_T",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_MS_T"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_VAL_POZ",
                    "label"           => trans("Rivile::rivile_clients.N08_VAL_POZ"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_1",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_1"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_2",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_2"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_3",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_3"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_4",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_4"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_5",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_5"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_6",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_6"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_POZ_DATE",
                    "label"           => trans("Rivile::rivile_clients.N08_POZ_DATE"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_BEG_DATE",
                    "label"           => trans("Rivile::rivile_clients.N08_BEG_DATE"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_END_DATE",
                    "label"           => trans("Rivile::rivile_clients.N08_END_DATE"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_ADDUSR",
                    "label"           => trans("Rivile::rivile_clients.N08_ADDUSR"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_USERIS",
                    "label"           => trans("Rivile::rivile_clients.N08_USERIS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_R_DATE",
                    "label"           => trans("Rivile::rivile_clients.N08_R_DATE"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_GER_POZ",
                    "label"           => trans("Rivile::rivile_clients.N08_GER_POZ"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_5",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_5"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_6",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_6"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_7",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_7"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_LS_8",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_LS_8"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_T_LIM_POZ",
                    "label"           => trans("Rivile::rivile_clients.N08_T_LIM_POZ"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_T_KRED_LIM",
                    "label"           => trans("Rivile::rivile_clients.N08_T_KRED_LIM"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_LIM",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_LIM"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KAINYNAS",
                    "label"           => trans("Rivile::rivile_clients.N08_KAINYNAS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_AR_REIK_P",
                    "label"           => trans("Rivile::rivile_clients.N08_AR_REIK_P"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_AR_REIK_T",
                    "label"           => trans("Rivile::rivile_clients.N08_AR_REIK_T"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_REZERVAS",
                    "label"           => trans("Rivile::rivile_clients.N08_REZERVAS"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_INTRASTAT",
                    "label"           => trans("Rivile::rivile_clients.N08_INTRASTAT"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_WB_KR",
                    "label"           => trans("Rivile::rivile_clients.N08_WB_KR"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_WB_KR_GR",
                    "label"           => trans("Rivile::rivile_clients.N08_WB_KR_GR"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_SUMA_WK_LIMIT",
                    "label"           => trans("Rivile::rivile_clients.N08_SUMA_WK_LIMIT"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_SUMA_WK",
                    "label"           => trans("Rivile::rivile_clients.N08_SUMA_WK"),
                    "required"        => 0,
                    "requiredVisible" => 0,
                ], [
                    "type"            => "singleLine",
                    "fieldID"         => "N08_KODAS_VL_U",
                    "label"           => trans("Rivile::rivile_clients.N08_KODAS_VL_U"),
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

    private function get_N08_KODAS_DS ()
    {
        $options = [];
        $list = N08Klij::orderBy('N08_KODAS_DS', 'asc')->whereNotNull('N08_KODAS_DS')->select('N08_KODAS_DS')->distinct('N08_KODAS_DS')->pluck('N08_KODAS_DS');

        foreach ($list as $value)
        {
            $item ['id'] = $value;
            $item ['label'] = $value;

            $options[] = $item;
        }

        return $options;
    }
}