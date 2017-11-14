<?php

namespace InteractiveSolutions\Rivile\Forms\Rivile;

class HCRivilePaymentsForm
{
    // name of the form
    protected $formID = 'rivile-payments';

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
            'storageURL' => route('admin.api.routes.rivile.payments'),
            'buttons' => [
                [
                    "class" => "col-centered",
                    "label" => trans('HCTranslations::core.buttons.submit'),
                    "type" => "submit",
                ],
            ],
            'structure' => [
                [
                    "type" => "singleLine",
                    "fieldID" => "COUNT",
                    "label" => trans("Rivile::rivile_payments.COUNT"),
                    "required" => 1,
                    "requiredVisible" => 1,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_CH",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_CH"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_DOK_NR",
                    "label" => trans("Rivile::rivile_payments.I04_DOK_NR"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_OP_RUSIS",
                    "label" => trans("Rivile::rivile_payments.I04_OP_RUSIS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_OP_TIPAS",
                    "label" => trans("Rivile::rivile_payments.I04_OP_TIPAS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_OP_STORNO",
                    "label" => trans("Rivile::rivile_payments.I04_OP_STORNO"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_OP_DATA",
                    "label" => trans("Rivile::rivile_payments.I04_OP_DATA"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_SS",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_SS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_MOKETOJAS",
                    "label" => trans("Rivile::rivile_payments.I04_MOKETOJAS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_KS",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_KS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_PAV",
                    "label" => trans("Rivile::rivile_payments.I04_PAV"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_ADR",
                    "label" => trans("Rivile::rivile_payments.I04_ADR"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_ATSTOVAS",
                    "label" => trans("Rivile::rivile_payments.I04_ATSTOVAS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_VS",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_VS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_SUMA",
                    "label" => trans("Rivile::rivile_payments.I04_SUMA"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_SUMA_DSK",
                    "label" => trans("Rivile::rivile_payments.I04_SUMA_DSK"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_SUMA_PLK",
                    "label" => trans("Rivile::rivile_payments.I04_SUMA_PLK"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_PASTABOS",
                    "label" => trans("Rivile::rivile_payments.I04_PASTABOS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_PERKELTA",
                    "label" => trans("Rivile::rivile_payments.I04_PERKELTA"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_IMP_EXP",
                    "label" => trans("Rivile::rivile_payments.I04_IMP_EXP"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_VL",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_VL"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_SUMA_VAL",
                    "label" => trans("Rivile::rivile_payments.I04_SUMA_VAL"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KOEF",
                    "label" => trans("Rivile::rivile_payments.I04_KOEF"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_USERIS",
                    "label" => trans("Rivile::rivile_payments.I04_USERIS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_R_DATE",
                    "label" => trans("Rivile::rivile_payments.I04_R_DATE"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_ADDUSR",
                    "label" => trans("Rivile::rivile_payments.I04_ADDUSR"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_SM",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_SM"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_APRASYMAS",
                    "label" => trans("Rivile::rivile_payments.I04_APRASYMAS"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_SUMA_PER",
                    "label" => trans("Rivile::rivile_payments.I04_SUMA_PER"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_SUMA_WK",
                    "label" => trans("Rivile::rivile_payments.I04_SUMA_WK"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_LS_1",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_LS_1"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_LS_2",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_LS_2"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_LS_3",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_LS_3"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_LS_4",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_LS_4"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_KODAS_ZN",
                    "label" => trans("Rivile::rivile_payments.I04_KODAS_ZN"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
                [
                    "type" => "singleLine",
                    "fieldID" => "I04_BUSENA",
                    "label" => trans("Rivile::rivile_payments.I04_BUSENA"),
                    "required" => 0,
                    "requiredVisible" => 0,
                ],
            ],
        ];

        if ($this->multiLanguage) {
            $form['availableLanguages'] = getHCContentLanguages();
        }

        if (!$edit) {
            return $form;
        }

        //Make changes to edit form if needed
        // $form['structure'][] = [];

        return $form;
    }
}