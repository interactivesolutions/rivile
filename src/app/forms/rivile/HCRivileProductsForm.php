<?php

namespace interactivesolutions\rivile\app\forms\rivile;

class HCRivileProductsForm
{
    // name of the form
    protected $formID = 'rivile-products';

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
            'storageURL' => route('admin.api.routes.rivile.products'),
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
    "label"           => trans("Rivile::rivile_products.COUNT"),
    "required"        => 1,
    "requiredVisible" => 1,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_PS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_PS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TIPAS",
    "label"           => trans("Rivile::rivile_products.N17_TIPAS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_P1",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_P1"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_P2",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_P2"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_US",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_US"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PAV",
    "label"           => trans("Rivile::rivile_products.N17_PAV"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PAVU",
    "label"           => trans("Rivile::rivile_products.N17_PAVU"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_KS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_KS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KOD_T",
    "label"           => trans("Rivile::rivile_products.N17_KOD_T"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_KS1",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_KS1"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KOD_T1",
    "label"           => trans("Rivile::rivile_products.N17_KOD_T1"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_KS2",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_KS2"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KOD_T2",
    "label"           => trans("Rivile::rivile_products.N17_KOD_T2"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_VS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_VS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_ES",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_ES"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_UZSIGUL",
    "label"           => trans("Rivile::rivile_products.N17_UZSIGUL"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_BAZ_KIEKIS",
    "label"           => trans("Rivile::rivile_products.N17_BAZ_KIEKIS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_ASSEMBLY",
    "label"           => trans("Rivile::rivile_products.N17_ASSEMBLY"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_1",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_1"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_2",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_2"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_3",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_3"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_4",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_4"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_DS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_DS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_NUOL_GR",
    "label"           => trans("Rivile::rivile_products.N17_NUOL_GR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_GALIOJA",
    "label"           => trans("Rivile::rivile_products.N17_GALIOJA"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MOKESTIS",
    "label"           => trans("Rivile::rivile_products.N17_MOKESTIS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TAX",
    "label"           => trans("Rivile::rivile_products.N17_TAX"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_KS_G",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_KS_G"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_GS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_GS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_INSTR_POZ",
    "label"           => trans("Rivile::rivile_products.N17_INSTR_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_INSTR_TIP",
    "label"           => trans("Rivile::rivile_products.N17_INSTR_TIP"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_INSTR_VYK",
    "label"           => trans("Rivile::rivile_products.N17_INSTR_VYK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_INSTR_DATE",
    "label"           => trans("Rivile::rivile_products.N17_INSTR_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_INSTR_FILE",
    "label"           => trans("Rivile::rivile_products.N17_INSTR_FILE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_URM_POZ",
    "label"           => trans("Rivile::rivile_products.N17_URM_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_URM_DATEIN",
    "label"           => trans("Rivile::rivile_products.N17_URM_DATEIN"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_URM_DATEOU",
    "label"           => trans("Rivile::rivile_products.N17_URM_DATEOU"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KREPS_POZ",
    "label"           => trans("Rivile::rivile_products.N17_KREPS_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KREPS_KTG",
    "label"           => trans("Rivile::rivile_products.N17_KREPS_KTG"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KREPS_MIN",
    "label"           => trans("Rivile::rivile_products.N17_KREPS_MIN"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_GARANT_POZ",
    "label"           => trans("Rivile::rivile_products.N17_GARANT_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_GARANT_MEN",
    "label"           => trans("Rivile::rivile_products.N17_GARANT_MEN"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_KS3",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_KS3"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TEMPER_POZ",
    "label"           => trans("Rivile::rivile_products.N17_TEMPER_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TEMPER_MAX",
    "label"           => trans("Rivile::rivile_products.N17_TEMPER_MAX"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TEMPER_MIN",
    "label"           => trans("Rivile::rivile_products.N17_TEMPER_MIN"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TEMPER_TXT",
    "label"           => trans("Rivile::rivile_products.N17_TEMPER_TXT"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SERTIF_POZ",
    "label"           => trans("Rivile::rivile_products.N17_SERTIF_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_MS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_MS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_ANTKAINIS",
    "label"           => trans("Rivile::rivile_products.N17_ANTKAINIS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MAX_NUOL",
    "label"           => trans("Rivile::rivile_products.N17_MAX_NUOL"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_EX_IM_FRAC",
    "label"           => trans("Rivile::rivile_products.N17_EX_IM_FRAC"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_G_TIME",
    "label"           => trans("Rivile::rivile_products.N17_G_TIME"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_OS",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_OS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_VAZ_LAIK",
    "label"           => trans("Rivile::rivile_products.N17_VAZ_LAIK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_UZS_LAIK",
    "label"           => trans("Rivile::rivile_products.N17_UZS_LAIK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PAP_LAIK",
    "label"           => trans("Rivile::rivile_products.N17_PAP_LAIK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SAN_COST",
    "label"           => trans("Rivile::rivile_products.N17_SAN_COST"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_UZS_COST",
    "label"           => trans("Rivile::rivile_products.N17_UZS_COST"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_TRA_COST",
    "label"           => trans("Rivile::rivile_products.N17_TRA_COST"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MEN_PAV",
    "label"           => trans("Rivile::rivile_products.N17_MEN_PAV"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MUIT_KOD",
    "label"           => trans("Rivile::rivile_products.N17_MUIT_KOD"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SK_KODAS",
    "label"           => trans("Rivile::rivile_products.N17_SK_KODAS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_INTERNET",
    "label"           => trans("Rivile::rivile_products.N17_INTERNET"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_DUM_POZ",
    "label"           => trans("Rivile::rivile_products.N17_DUM_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_DUM_TIP",
    "label"           => trans("Rivile::rivile_products.N17_DUM_TIP"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_DUM_D_IN",
    "label"           => trans("Rivile::rivile_products.N17_DUM_D_IN"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_DUM_D_OUT",
    "label"           => trans("Rivile::rivile_products.N17_DUM_D_OUT"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MUITO_PROC",
    "label"           => trans("Rivile::rivile_products.N17_MUITO_PROC"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_AKCIZO_PROC",
    "label"           => trans("Rivile::rivile_products.N17_AKCIZO_PROC"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PASTABOS",
    "label"           => trans("Rivile::rivile_products.N17_PASTABOS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_POZ_DATE",
    "label"           => trans("Rivile::rivile_products.N17_POZ_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_BEG_DATE",
    "label"           => trans("Rivile::rivile_products.N17_BEG_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_END_DATE",
    "label"           => trans("Rivile::rivile_products.N17_END_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_USERIS",
    "label"           => trans("Rivile::rivile_products.N17_USERIS"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_R_DATE",
    "label"           => trans("Rivile::rivile_products.N17_R_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_ADD_DATE",
    "label"           => trans("Rivile::rivile_products.N17_ADD_DATE"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_ADDUSR",
    "label"           => trans("Rivile::rivile_products.N17_ADDUSR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MIN_VISO",
    "label"           => trans("Rivile::rivile_products.N17_MIN_VISO"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SERT_POZ",
    "label"           => trans("Rivile::rivile_products.N17_SERT_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KAT_POZ",
    "label"           => trans("Rivile::rivile_products.N17_KAT_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_BROK_POZ",
    "label"           => trans("Rivile::rivile_products.N17_BROK_POZ"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_PS_G",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_PS_G"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_DATA_BR",
    "label"           => trans("Rivile::rivile_products.N17_DATA_BR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_VS_T",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_VS_T"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_MS_A",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_MS_A"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_MS_M",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_MS_M"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_AR_NAUJA",
    "label"           => trans("Rivile::rivile_products.N17_AR_NAUJA"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_DATA_NAUJA",
    "label"           => trans("Rivile::rivile_products.N17_DATA_NAUJA"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MIN_ANTK",
    "label"           => trans("Rivile::rivile_products.N17_MIN_ANTK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_5",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_5"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_6",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_6"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_7",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_7"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_KODAS_LS_8",
    "label"           => trans("Rivile::rivile_products.N17_KODAS_LS_8"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MIN_ANTK_UR",
    "label"           => trans("Rivile::rivile_products.N17_MIN_ANTK_UR"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MIN_ANTK_UR_D",
    "label"           => trans("Rivile::rivile_products.N17_MIN_ANTK_UR_D"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_MAX_ANTK",
    "label"           => trans("Rivile::rivile_products.N17_MAX_ANTK"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SVS_GALIOJA",
    "label"           => trans("Rivile::rivile_products.N17_SVS_GALIOJA"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SVS_GALIOJA_D",
    "label"           => trans("Rivile::rivile_products.N17_SVS_GALIOJA_D"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_SVS_PARTIJA",
    "label"           => trans("Rivile::rivile_products.N17_SVS_PARTIJA"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PAV_K1",
    "label"           => trans("Rivile::rivile_products.N17_PAV_K1"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PAV_K2",
    "label"           => trans("Rivile::rivile_products.N17_PAV_K2"),
    "required"        => 0,
    "requiredVisible" => 0,
],[
    "type"            => "singleLine",
    "fieldID"         => "N17_PAV_K3",
    "label"           => trans("Rivile::rivile_products.N17_PAV_K3"),
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