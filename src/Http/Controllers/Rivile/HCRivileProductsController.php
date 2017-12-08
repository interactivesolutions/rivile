<?php

namespace InteractiveSolutions\Rivile\Http\Controllers\Rivile;

use Illuminate\Database\Eloquent\Builder;
use Artisan;
use Illuminate\View\View;
use InteractiveSolutions\HoneycombCore\Http\Controllers\HCBaseController;
use InteractiveSolutions\Rivile\Models\N17Prod;
use InteractiveSolutions\Rivile\Validators\Rivile\HCRivileProductsValidator;

class HCRivileProductsController extends HCBaseController
{
    /**
     * Returning configured admin view
     *
     * @return View
     * @throws \Illuminate\Container\EntryNotFoundException
     */
    public function adminIndex(): View
    {
        $config = [
            'title' => trans('Rivile::rivile_products.page_title'),
            'listURL' => route('admin.api.routes.rivile.products'),
            'newFormUrl' => route('admin.api.form-manager', ['rivile-products-new']),
            'editFormUrl' => route('admin.api.form-manager', ['rivile-products-edit']),
            'imagesUrl' => route('resource.get', ['/']),
            'headers' => $this->getAdminListHeader(),
        ];

        if (auth()->user()->can('interactivesolutions_rivile_routes_rivile_products_create')) {
            $config['actions'][] = 'new';
        }

        if (auth()->user()->can('interactivesolutions_rivile_routes_rivile_products_update')) {
            $config['actions'][] = 'update';
            $config['actions'][] = 'restore';
        }

        if (auth()->user()->can('interactivesolutions_rivile_routes_rivile_products_delete')) {
            $config['actions'][] = 'delete';
        }

        $config['actions'][] = 'search';
        $config['filters'] = $this->getFilters();

        return hcview('HCCoreUI::admin.content.list', ['config' => $config]);
    }

    /**
     * Creating Admin List Header based on Main Table
     *
     * @return array
     */
    public function getAdminListHeader()
    {
        return [
            'COUNT' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.COUNT'),
            ],
            'N17_KODAS_PS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_PS'),
            ],
            'N17_TIPAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TIPAS'),
            ],
            'N17_KODAS_P1' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_P1'),
            ],
            'N17_KODAS_P2' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_P2'),
            ],
            'N17_KODAS_US' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_US'),
            ],
            'N17_PAV' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PAV'),
            ],
            'N17_PAVU' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PAVU'),
            ],
            'N17_KODAS_KS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_KS'),
            ],
            'N17_KOD_T' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KOD_T'),
            ],
            'N17_KODAS_KS1' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_KS1'),
            ],
            'N17_KOD_T1' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KOD_T1'),
            ],
            'N17_KODAS_KS2' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_KS2'),
            ],
            'N17_KOD_T2' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KOD_T2'),
            ],
            'N17_KODAS_VS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_VS'),
            ],
            'N17_KODAS_ES' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_ES'),
            ],
            'N17_UZSIGUL' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_UZSIGUL'),
            ],
            'N17_BAZ_KIEKIS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_BAZ_KIEKIS'),
            ],
            'N17_ASSEMBLY' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_ASSEMBLY'),
            ],
            'N17_KODAS_LS_1' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_1'),
            ],
            'N17_KODAS_LS_2' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_2'),
            ],
            'N17_KODAS_LS_3' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_3'),
            ],
            'N17_KODAS_LS_4' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_4'),
            ],
            'N17_KODAS_DS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_DS'),
            ],
            'N17_NUOL_GR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_NUOL_GR'),
            ],
            'N17_GALIOJA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_GALIOJA'),
            ],
            'N17_MOKESTIS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MOKESTIS'),
            ],
            'N17_TAX' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TAX'),
            ],
            'N17_KODAS_KS_G' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_KS_G'),
            ],
            'N17_KODAS_GS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_GS'),
            ],
            'N17_INSTR_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_INSTR_POZ'),
            ],
            'N17_INSTR_TIP' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_INSTR_TIP'),
            ],
            'N17_INSTR_VYK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_INSTR_VYK'),
            ],
            'N17_INSTR_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_INSTR_DATE'),
            ],
            'N17_INSTR_FILE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_INSTR_FILE'),
            ],
            'N17_URM_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_URM_POZ'),
            ],
            'N17_URM_DATEIN' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_URM_DATEIN'),
            ],
            'N17_URM_DATEOU' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_URM_DATEOU'),
            ],
            'N17_KREPS_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KREPS_POZ'),
            ],
            'N17_KREPS_KTG' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KREPS_KTG'),
            ],
            'N17_KREPS_MIN' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KREPS_MIN'),
            ],
            'N17_GARANT_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_GARANT_POZ'),
            ],
            'N17_GARANT_MEN' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_GARANT_MEN'),
            ],
            'N17_KODAS_KS3' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_KS3'),
            ],
            'N17_TEMPER_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TEMPER_POZ'),
            ],
            'N17_TEMPER_MAX' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TEMPER_MAX'),
            ],
            'N17_TEMPER_MIN' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TEMPER_MIN'),
            ],
            'N17_TEMPER_TXT' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TEMPER_TXT'),
            ],
            'N17_SERTIF_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SERTIF_POZ'),
            ],
            'N17_KODAS_MS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_MS'),
            ],
            'N17_ANTKAINIS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_ANTKAINIS'),
            ],
            'N17_MAX_NUOL' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MAX_NUOL'),
            ],
            'N17_EX_IM_FRAC' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_EX_IM_FRAC'),
            ],
            'N17_G_TIME' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_G_TIME'),
            ],
            'N17_KODAS_OS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_OS'),
            ],
            'N17_VAZ_LAIK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_VAZ_LAIK'),
            ],
            'N17_UZS_LAIK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_UZS_LAIK'),
            ],
            'N17_PAP_LAIK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PAP_LAIK'),
            ],
            'N17_SAN_COST' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SAN_COST'),
            ],
            'N17_UZS_COST' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_UZS_COST'),
            ],
            'N17_TRA_COST' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_TRA_COST'),
            ],
            'N17_MEN_PAV' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MEN_PAV'),
            ],
            'N17_MUIT_KOD' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MUIT_KOD'),
            ],
            'N17_SK_KODAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SK_KODAS'),
            ],
            'N17_INTERNET' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_INTERNET'),
            ],
            'N17_DUM_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_DUM_POZ'),
            ],
            'N17_DUM_TIP' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_DUM_TIP'),
            ],
            'N17_DUM_D_IN' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_DUM_D_IN'),
            ],
            'N17_DUM_D_OUT' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_DUM_D_OUT'),
            ],
            'N17_MUITO_PROC' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MUITO_PROC'),
            ],
            'N17_AKCIZO_PROC' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_AKCIZO_PROC'),
            ],
            'N17_PASTABOS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PASTABOS'),
            ],
            'N17_POZ_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_POZ_DATE'),
            ],
            'N17_BEG_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_BEG_DATE'),
            ],
            'N17_END_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_END_DATE'),
            ],
            'N17_USERIS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_USERIS'),
            ],
            'N17_R_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_R_DATE'),
            ],
            'N17_ADD_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_ADD_DATE'),
            ],
            'N17_ADDUSR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_ADDUSR'),
            ],
            'N17_MIN_VISO' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MIN_VISO'),
            ],
            'N17_SERT_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SERT_POZ'),
            ],
            'N17_KAT_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KAT_POZ'),
            ],
            'N17_BROK_POZ' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_BROK_POZ'),
            ],
            'N17_KODAS_PS_G' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_PS_G'),
            ],
            'N17_DATA_BR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_DATA_BR'),
            ],
            'N17_KODAS_VS_T' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_VS_T'),
            ],
            'N17_KODAS_MS_A' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_MS_A'),
            ],
            'N17_KODAS_MS_M' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_MS_M'),
            ],
            'N17_AR_NAUJA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_AR_NAUJA'),
            ],
            'N17_DATA_NAUJA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_DATA_NAUJA'),
            ],
            'N17_MIN_ANTK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MIN_ANTK'),
            ],
            'N17_KODAS_LS_5' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_5'),
            ],
            'N17_KODAS_LS_6' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_6'),
            ],
            'N17_KODAS_LS_7' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_7'),
            ],
            'N17_KODAS_LS_8' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_KODAS_LS_8'),
            ],
            'N17_MIN_ANTK_UR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MIN_ANTK_UR'),
            ],
            'N17_MIN_ANTK_UR_D' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MIN_ANTK_UR_D'),
            ],
            'N17_MAX_ANTK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_MAX_ANTK'),
            ],
            'N17_SVS_GALIOJA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SVS_GALIOJA'),
            ],
            'N17_SVS_GALIOJA_D' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SVS_GALIOJA_D'),
            ],
            'N17_SVS_PARTIJA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_SVS_PARTIJA'),
            ],
            'N17_PAV_K1' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PAV_K1'),
            ],
            'N17_PAV_K2' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PAV_K2'),
            ],
            'N17_PAV_K3' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_products.N17_PAV_K3'),
            ],

        ];
    }

    /**
     * Generating filters required for admin view
     *
     * @return array
     */
    public function getFilters()
    {
        $filters = [];

        return $filters;
    }

    /**
     * Create item
     *
     * @return mixed
     * @throws \Exception
     */
    protected function __apiStore()
    {
        $data = $this->getInputData();

        $record = N17Prod::create(array_get($data, 'record'));
        Artisan::call('rivile:export-product', ['action' => 'new', 'id' => $record->id]);

        return $this->apiShow($record->id);
    }

    /**
     * Getting user data on POST call
     *
     * @return mixed
     * @throws \Exception
     */
    protected function getInputData()
    {
        (new HCRivileProductsValidator())->validateForm();

        $_data = request()->all();

        if (array_has($_data, 'id')) {
            array_set($data, 'record.id', array_get($_data, 'id'));
        }

        array_set($data, 'record.COUNT', array_get($_data, 'COUNT'));
        array_set($data, 'record.N17_KODAS_PS', array_get($_data, 'N17_KODAS_PS'));
        array_set($data, 'record.N17_TIPAS', array_get($_data, 'N17_TIPAS'));
        array_set($data, 'record.N17_KODAS_P1', array_get($_data, 'N17_KODAS_P1'));
        array_set($data, 'record.N17_KODAS_P2', array_get($_data, 'N17_KODAS_P2'));
        array_set($data, 'record.N17_KODAS_US', array_get($_data, 'N17_KODAS_US'));
        array_set($data, 'record.N17_PAV', array_get($_data, 'N17_PAV'));
        array_set($data, 'record.N17_PAVU', array_get($_data, 'N17_PAVU'));
        array_set($data, 'record.N17_KODAS_KS', array_get($_data, 'N17_KODAS_KS'));
        array_set($data, 'record.N17_KOD_T', array_get($_data, 'N17_KOD_T'));
        array_set($data, 'record.N17_KODAS_KS1', array_get($_data, 'N17_KODAS_KS1'));
        array_set($data, 'record.N17_KOD_T1', array_get($_data, 'N17_KOD_T1'));
        array_set($data, 'record.N17_KODAS_KS2', array_get($_data, 'N17_KODAS_KS2'));
        array_set($data, 'record.N17_KOD_T2', array_get($_data, 'N17_KOD_T2'));
        array_set($data, 'record.N17_KODAS_VS', array_get($_data, 'N17_KODAS_VS'));
        array_set($data, 'record.N17_KODAS_ES', array_get($_data, 'N17_KODAS_ES'));
        array_set($data, 'record.N17_UZSIGUL', array_get($_data, 'N17_UZSIGUL'));
        array_set($data, 'record.N17_BAZ_KIEKIS', array_get($_data, 'N17_BAZ_KIEKIS'));
        array_set($data, 'record.N17_ASSEMBLY', array_get($_data, 'N17_ASSEMBLY'));
        array_set($data, 'record.N17_KODAS_LS_1', array_get($_data, 'N17_KODAS_LS_1'));
        array_set($data, 'record.N17_KODAS_LS_2', array_get($_data, 'N17_KODAS_LS_2'));
        array_set($data, 'record.N17_KODAS_LS_3', array_get($_data, 'N17_KODAS_LS_3'));
        array_set($data, 'record.N17_KODAS_LS_4', array_get($_data, 'N17_KODAS_LS_4'));
        array_set($data, 'record.N17_KODAS_DS', array_get($_data, 'N17_KODAS_DS'));
        array_set($data, 'record.N17_NUOL_GR', array_get($_data, 'N17_NUOL_GR'));
        array_set($data, 'record.N17_GALIOJA', array_get($_data, 'N17_GALIOJA'));
        array_set($data, 'record.N17_MOKESTIS', array_get($_data, 'N17_MOKESTIS'));
        array_set($data, 'record.N17_TAX', array_get($_data, 'N17_TAX'));
        array_set($data, 'record.N17_KODAS_KS_G', array_get($_data, 'N17_KODAS_KS_G'));
        array_set($data, 'record.N17_KODAS_GS', array_get($_data, 'N17_KODAS_GS'));
        array_set($data, 'record.N17_INSTR_POZ', array_get($_data, 'N17_INSTR_POZ'));
        array_set($data, 'record.N17_INSTR_TIP', array_get($_data, 'N17_INSTR_TIP'));
        array_set($data, 'record.N17_INSTR_VYK', array_get($_data, 'N17_INSTR_VYK'));
        array_set($data, 'record.N17_INSTR_DATE', array_get($_data, 'N17_INSTR_DATE'));
        array_set($data, 'record.N17_INSTR_FILE', array_get($_data, 'N17_INSTR_FILE'));
        array_set($data, 'record.N17_URM_POZ', array_get($_data, 'N17_URM_POZ'));
        array_set($data, 'record.N17_URM_DATEIN', array_get($_data, 'N17_URM_DATEIN'));
        array_set($data, 'record.N17_URM_DATEOU', array_get($_data, 'N17_URM_DATEOU'));
        array_set($data, 'record.N17_KREPS_POZ', array_get($_data, 'N17_KREPS_POZ'));
        array_set($data, 'record.N17_KREPS_KTG', array_get($_data, 'N17_KREPS_KTG'));
        array_set($data, 'record.N17_KREPS_MIN', array_get($_data, 'N17_KREPS_MIN'));
        array_set($data, 'record.N17_GARANT_POZ', array_get($_data, 'N17_GARANT_POZ'));
        array_set($data, 'record.N17_GARANT_MEN', array_get($_data, 'N17_GARANT_MEN'));
        array_set($data, 'record.N17_KODAS_KS3', array_get($_data, 'N17_KODAS_KS3'));
        array_set($data, 'record.N17_TEMPER_POZ', array_get($_data, 'N17_TEMPER_POZ'));
        array_set($data, 'record.N17_TEMPER_MAX', array_get($_data, 'N17_TEMPER_MAX'));
        array_set($data, 'record.N17_TEMPER_MIN', array_get($_data, 'N17_TEMPER_MIN'));
        array_set($data, 'record.N17_TEMPER_TXT', array_get($_data, 'N17_TEMPER_TXT'));
        array_set($data, 'record.N17_SERTIF_POZ', array_get($_data, 'N17_SERTIF_POZ'));
        array_set($data, 'record.N17_KODAS_MS', array_get($_data, 'N17_KODAS_MS'));
        array_set($data, 'record.N17_ANTKAINIS', array_get($_data, 'N17_ANTKAINIS'));
        array_set($data, 'record.N17_MAX_NUOL', array_get($_data, 'N17_MAX_NUOL'));
        array_set($data, 'record.N17_EX_IM_FRAC', array_get($_data, 'N17_EX_IM_FRAC'));
        array_set($data, 'record.N17_G_TIME', array_get($_data, 'N17_G_TIME'));
        array_set($data, 'record.N17_KODAS_OS', array_get($_data, 'N17_KODAS_OS'));
        array_set($data, 'record.N17_VAZ_LAIK', array_get($_data, 'N17_VAZ_LAIK'));
        array_set($data, 'record.N17_UZS_LAIK', array_get($_data, 'N17_UZS_LAIK'));
        array_set($data, 'record.N17_PAP_LAIK', array_get($_data, 'N17_PAP_LAIK'));
        array_set($data, 'record.N17_SAN_COST', array_get($_data, 'N17_SAN_COST'));
        array_set($data, 'record.N17_UZS_COST', array_get($_data, 'N17_UZS_COST'));
        array_set($data, 'record.N17_TRA_COST', array_get($_data, 'N17_TRA_COST'));
        array_set($data, 'record.N17_MEN_PAV', array_get($_data, 'N17_MEN_PAV'));
        array_set($data, 'record.N17_MUIT_KOD', array_get($_data, 'N17_MUIT_KOD'));
        array_set($data, 'record.N17_SK_KODAS', array_get($_data, 'N17_SK_KODAS'));
        array_set($data, 'record.N17_INTERNET', array_get($_data, 'N17_INTERNET'));
        array_set($data, 'record.N17_DUM_POZ', array_get($_data, 'N17_DUM_POZ'));
        array_set($data, 'record.N17_DUM_TIP', array_get($_data, 'N17_DUM_TIP'));
        array_set($data, 'record.N17_DUM_D_IN', array_get($_data, 'N17_DUM_D_IN'));
        array_set($data, 'record.N17_DUM_D_OUT', array_get($_data, 'N17_DUM_D_OUT'));
        array_set($data, 'record.N17_MUITO_PROC', array_get($_data, 'N17_MUITO_PROC'));
        array_set($data, 'record.N17_AKCIZO_PROC', array_get($_data, 'N17_AKCIZO_PROC'));
        array_set($data, 'record.N17_PASTABOS', array_get($_data, 'N17_PASTABOS'));
        array_set($data, 'record.N17_POZ_DATE', array_get($_data, 'N17_POZ_DATE'));
        array_set($data, 'record.N17_BEG_DATE', array_get($_data, 'N17_BEG_DATE'));
        array_set($data, 'record.N17_END_DATE', array_get($_data, 'N17_END_DATE'));
        array_set($data, 'record.N17_USERIS', array_get($_data, 'N17_USERIS'));
        array_set($data, 'record.N17_R_DATE', array_get($_data, 'N17_R_DATE'));
        array_set($data, 'record.N17_ADD_DATE', array_get($_data, 'N17_ADD_DATE'));
        array_set($data, 'record.N17_ADDUSR', array_get($_data, 'N17_ADDUSR'));
        array_set($data, 'record.N17_MIN_VISO', array_get($_data, 'N17_MIN_VISO'));
        array_set($data, 'record.N17_SERT_POZ', array_get($_data, 'N17_SERT_POZ'));
        array_set($data, 'record.N17_KAT_POZ', array_get($_data, 'N17_KAT_POZ'));
        array_set($data, 'record.N17_BROK_POZ', array_get($_data, 'N17_BROK_POZ'));
        array_set($data, 'record.N17_KODAS_PS_G', array_get($_data, 'N17_KODAS_PS_G'));
        array_set($data, 'record.N17_DATA_BR', array_get($_data, 'N17_DATA_BR'));
        array_set($data, 'record.N17_KODAS_VS_T', array_get($_data, 'N17_KODAS_VS_T'));
        array_set($data, 'record.N17_KODAS_MS_A', array_get($_data, 'N17_KODAS_MS_A'));
        array_set($data, 'record.N17_KODAS_MS_M', array_get($_data, 'N17_KODAS_MS_M'));
        array_set($data, 'record.N17_AR_NAUJA', array_get($_data, 'N17_AR_NAUJA'));
        array_set($data, 'record.N17_DATA_NAUJA', array_get($_data, 'N17_DATA_NAUJA'));
        array_set($data, 'record.N17_MIN_ANTK', array_get($_data, 'N17_MIN_ANTK'));
        array_set($data, 'record.N17_KODAS_LS_5', array_get($_data, 'N17_KODAS_LS_5'));
        array_set($data, 'record.N17_KODAS_LS_6', array_get($_data, 'N17_KODAS_LS_6'));
        array_set($data, 'record.N17_KODAS_LS_7', array_get($_data, 'N17_KODAS_LS_7'));
        array_set($data, 'record.N17_KODAS_LS_8', array_get($_data, 'N17_KODAS_LS_8'));
        array_set($data, 'record.N17_MIN_ANTK_UR', array_get($_data, 'N17_MIN_ANTK_UR'));
        array_set($data, 'record.N17_MIN_ANTK_UR_D', array_get($_data, 'N17_MIN_ANTK_UR_D'));
        array_set($data, 'record.N17_MAX_ANTK', array_get($_data, 'N17_MAX_ANTK'));
        array_set($data, 'record.N17_SVS_GALIOJA', array_get($_data, 'N17_SVS_GALIOJA'));
        array_set($data, 'record.N17_SVS_GALIOJA_D', array_get($_data, 'N17_SVS_GALIOJA_D'));
        array_set($data, 'record.N17_SVS_PARTIJA', array_get($_data, 'N17_SVS_PARTIJA'));
        array_set($data, 'record.N17_PAV_K1', array_get($_data, 'N17_PAV_K1'));
        array_set($data, 'record.N17_PAV_K2', array_get($_data, 'N17_PAV_K2'));
        array_set($data, 'record.N17_PAV_K3', array_get($_data, 'N17_PAV_K3'));

        return makeEmptyNullable($data);
    }

    /**
     * Getting single record
     *
     * @param $id
     * @return mixed
     */
    public function apiShow(string $id)
    {
        $with = [];

        $select = N17Prod::getFillableFields();

        $record = N17Prod::with($with)
            ->select($select)
            ->where('id', $id)
            ->firstOrFail();

        return $record;
    }

    /**
     * Updates existing item based on ID
     *
     * @param string $id
     * @return mixed
     * @throws \Exception
     */
    protected function __apiUpdate(string $id)
    {
        $record = N17Prod::findOrFail($id);

        $data = $this->getInputData();

        $record->update(array_get($data, 'record', []));
        Artisan::call('rivile:export-product', ['action' => 'update', 'id' => $record->id]);

        return $this->apiShow($record->id);
    }

    /**
     * Updates existing specific items based on ID
     *
     * @param string $id
     * @return mixed
     */
    protected function __apiUpdateStrict(string $id)
    {
        N17Prod::where('id', $id)->update(request()->all());

        return $this->apiShow($id);
    }

    /**
     * Delete records table
     *
     * @param $list
     * @return mixed
     */
    protected function __apiDestroy(array $list)
    {
        N17Prod::destroy($list);

        return hcSuccess();
    }

    /**
     * Delete records table
     *
     * @param $list
     * @return mixed
     */
    protected function __apiForceDelete(array $list)
    {
        N17Prod::onlyTrashed()->whereIn('id', $list)->forceDelete();

        return hcSuccess();
    }

    /**
     * Restore multiple records
     *
     * @param $list
     * @return mixed
     */
    protected function __apiRestore(array $list)
    {
        N17Prod::whereIn('id', $list)->restore();

        return hcSuccess();
    }

    /**
     * Creating data query
     *
     * @param array $select
     * @return mixed
     */
    protected function createQuery(array $select = null)
    {
        $with = [];

        if ($select == null) {
            $select = N17Prod::getFillableFields();
        }

        $list = N17Prod::with($with)->select($select)
            // add filters
            ->where(function($query) use ($select) {
                $query = $this->getRequestParameters($query, $select);
            });

        // enabling check for deleted
        $list = $this->checkForDeleted($list);

        // add search items
        $list = $this->search($list);

        // ordering data
        $list = $this->orderData($list, $select);

        return $list;
    }

    /**
     * List search elements
     * @param Builder $query
     * @param string $phrase
     * @return Builder
     */
    protected function searchQuery(Builder $query, string $phrase): Builder
    {
        return $query->where(function(Builder $query) use ($phrase) {
            $query->where('COUNT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_PS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TIPAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_P1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_P2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_US', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PAV', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PAVU', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_KS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KOD_T', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_KS1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KOD_T1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_KS2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KOD_T2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_VS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_ES', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_UZSIGUL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_BAZ_KIEKIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_ASSEMBLY', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_3', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_4', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_DS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_NUOL_GR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_GALIOJA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MOKESTIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TAX', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_KS_G', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_GS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_INSTR_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_INSTR_TIP', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_INSTR_VYK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_INSTR_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_INSTR_FILE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_URM_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_URM_DATEIN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_URM_DATEOU', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KREPS_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KREPS_KTG', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KREPS_MIN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_GARANT_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_GARANT_MEN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_KS3', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TEMPER_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TEMPER_MAX', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TEMPER_MIN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TEMPER_TXT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SERTIF_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_MS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_ANTKAINIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MAX_NUOL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_EX_IM_FRAC', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_G_TIME', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_OS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_VAZ_LAIK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_UZS_LAIK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PAP_LAIK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SAN_COST', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_UZS_COST', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_TRA_COST', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MEN_PAV', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MUIT_KOD', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SK_KODAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_INTERNET', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_DUM_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_DUM_TIP', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_DUM_D_IN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_DUM_D_OUT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MUITO_PROC', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_AKCIZO_PROC', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PASTABOS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_POZ_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_BEG_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_END_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_USERIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_R_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_ADD_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_ADDUSR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MIN_VISO', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SERT_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KAT_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_BROK_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_PS_G', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_DATA_BR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_VS_T', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_MS_A', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_MS_M', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_AR_NAUJA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_DATA_NAUJA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MIN_ANTK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_5', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_6', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_7', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_KODAS_LS_8', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MIN_ANTK_UR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MIN_ANTK_UR_D', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_MAX_ANTK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SVS_GALIOJA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SVS_GALIOJA_D', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_SVS_PARTIJA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PAV_K1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PAV_K2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N17_PAV_K3', 'LIKE', '%' . $phrase . '%');
        });
    }
}
