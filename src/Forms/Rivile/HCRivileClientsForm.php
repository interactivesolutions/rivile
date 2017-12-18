<?php

namespace InteractiveSolutions\Rivile\Forms\Rivile;

use InteractiveSolutions\HoneycombCore\Enum\BoolEnum;
use InteractiveSolutions\Rivile\Enum\ClientClassEnum;
use InteractiveSolutions\Rivile\Enum\ClientInvoiceConnectionEnum;
use InteractiveSolutions\Rivile\Enum\ClientTypeEnum;

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
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    public function createForm(bool $edit = false)
    {
        $form = [
            'storageURL' => route('admin.api.routes.rivile.clients'),
            'buttons' => [
                [
                    'class' => 'col-centered',
                    'label' => trans('HCTranslations::core.buttons.submit'),
                    'type' => 'submit',
                ],
            ],
            'structure' => [
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_KS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_KS'),
                    'required' => 1,
                    'requiredVisible' => 1,
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_KODAS_DS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_DS'),
                    'required' => 1,
                    'requiredVisible' => 1,
                    'options' => ClientInvoiceConnectionEnum::options(),
                    'value' => ClientInvoiceConnectionEnum::pt001()->__toString(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_RUSIS',
                    'label' => trans('Rivile::rivile_clients.N08_RUSIS'),
                    'options' => ClientTypeEnum::options(),
                    'value' => ClientTypeEnum::customer()->__toString(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_PVM_KODAS',
                    'label' => trans('Rivile::rivile_clients.N08_PVM_KODAS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_IM_KODAS',
                    'label' => trans('Rivile::rivile_clients.N08_IM_KODAS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_PAV',
                    'label' => trans('Rivile::rivile_clients.N08_PAV'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_ADR',
                    'label' => trans('Rivile::rivile_clients.N08_ADR'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_PASTAS',
                    'label' => trans('Rivile::rivile_clients.N08_PASTAS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_ATSTOVAS',
                    'label' => trans('Rivile::rivile_clients.N08_ATSTOVAS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_E_MAIL',
                    'label' => trans('Rivile::rivile_clients.N08_E_MAIL'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_FAX_NUM',
                    'label' => trans('Rivile::rivile_clients.N08_FAX_NUM'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_TEL',
                    'label' => trans('Rivile::rivile_clients.N08_TEL'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_MOB_TEL',
                    'label' => trans('Rivile::rivile_clients.N08_MOB_TEL'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_1',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_1'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_2',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_2'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_3',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_3'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_4',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_4'),
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_TIPAS_PIRK',
                    'label' => trans('Rivile::rivile_clients.N08_TIPAS_PIRK'),
                    'options' => ClientClassEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_TIPAS_TIEK',
                    'label' => trans('Rivile::rivile_clients.N08_TIPAS_TIEK'),
                    'options' => ClientClassEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_GS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_GS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_CREDIT_LIM',
                    'label' => trans('Rivile::rivile_clients.N08_CREDIT_LIM'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_DELSPINIGIAI',
                    'label' => trans('Rivile::rivile_clients.N08_DELSPINIGIAI'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_QS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_QS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_NUOL_GR',
                    'label' => trans('Rivile::rivile_clients.N08_NUOL_GR'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_XS_T',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_XS_T'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_XS_P',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_XS_P'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_TS_T',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_TS_T'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_TS_P',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_TS_P'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_ADD_DATE',
                    'label' => trans('Rivile::rivile_clients.N08_ADD_DATE'),
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_SUTARTIS',
                    'label' => trans('Rivile::rivile_clients.N08_SUTARTIS'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_KAIN_ABC',
                    'label' => trans('Rivile::rivile_clients.N08_KAIN_ABC'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_DIENOS',
                    'label' => trans('Rivile::rivile_clients.N08_DIENOS'),
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_TIEK_DIEN',
                    'label' => trans('Rivile::rivile_clients.N08_TIEK_DIEN'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_KRED_LIM',
                    'label' => trans('Rivile::rivile_clients.N08_KRED_LIM'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_PRIEDAI',
                    'label' => trans('Rivile::rivile_clients.N08_PRIEDAI'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_IS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_IS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_OS_P',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_OS_P'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_OS',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_OS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_MS_P',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_MS_P'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_MS_T',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_MS_T'),
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_VAL_POZ',
                    'label' => trans('Rivile::rivile_clients.N08_VAL_POZ'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_1',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_1'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_2',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_2'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_3',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_3'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_4',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_4'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_5',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_5'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_6',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_6'),
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_POZ_DATE',
                    'label' => trans('Rivile::rivile_clients.N08_POZ_DATE'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_BEG_DATE',
                    'label' => trans('Rivile::rivile_clients.N08_BEG_DATE'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_END_DATE',
                    'label' => trans('Rivile::rivile_clients.N08_END_DATE'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_ADDUSR',
                    'label' => trans('Rivile::rivile_clients.N08_ADDUSR'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_USERIS',
                    'label' => trans('Rivile::rivile_clients.N08_USERIS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_R_DATE',
                    'label' => trans('Rivile::rivile_clients.N08_R_DATE'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_GER_POZ',
                    'label' => trans('Rivile::rivile_clients.N08_GER_POZ'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_5',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_5'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_6',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_6'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_7',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_7'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_LS_8',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_LS_8'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_T_LIM_POZ',
                    'label' => trans('Rivile::rivile_clients.N08_T_LIM_POZ'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_T_KRED_LIM',
                    'label' => trans('Rivile::rivile_clients.N08_T_KRED_LIM'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_LIM',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_LIM'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KAINYNAS',
                    'label' => trans('Rivile::rivile_clients.N08_KAINYNAS'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_AR_REIK_P',
                    'label' => trans('Rivile::rivile_clients.N08_AR_REIK_P'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_AR_REIK_T',
                    'label' => trans('Rivile::rivile_clients.N08_AR_REIK_T'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_REZERVAS',
                    'label' => trans('Rivile::rivile_clients.N08_REZERVAS'),
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_INTRASTAT',
                    'label' => trans('Rivile::rivile_clients.N08_INTRASTAT'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_WB_KR',
                    'label' => trans('Rivile::rivile_clients.N08_WB_KR'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'dropDownList',
                    'fieldID' => 'N08_WB_KR_GR',
                    'label' => trans('Rivile::rivile_clients.N08_WB_KR_GR'),
                    'options' => BoolEnum::options(),
                    'search' => [
                        'maximumSelectionLength' => 1,
                    ],
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_SUMA_WK_LIMIT',
                    'label' => trans('Rivile::rivile_clients.N08_SUMA_WK_LIMIT'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_SUMA_WK',
                    'label' => trans('Rivile::rivile_clients.N08_SUMA_WK'),
                ],
                [
                    'type' => 'singleLine',
                    'fieldID' => 'N08_KODAS_VL_U',
                    'label' => trans('Rivile::rivile_clients.N08_KODAS_VL_U'),
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
