<?php

declare(strict_types = 1);

namespace InteractiveSolutions\Rivile\Http\Controllers\Rivile;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use InteractiveSolutions\HoneycombCore\Http\Controllers\HCBaseController;
use InteractiveSolutions\Rivile\Validators\Rivile\HCRivileClientsValidator;
use InteractiveSolutions\Rivile\Models\N08Klij;

/**
 * Class HCRivileClientsController
 * @package InteractiveSolutions\Rivile\Http\Controllers\Rivile
 */
class HCRivileClientsController extends HCBaseController
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
            'title' => trans('Rivile::rivile_clients.page_title'),
            'listURL' => route('admin.api.routes.rivile.clients'),
            'newFormUrl' => route('admin.api.form-manager', ['rivile-clients-new']),
            'editFormUrl' => route('admin.api.form-manager', ['rivile-clients-edit']),
            'imagesUrl' => route('resource.get', ['/']),
            'headers' => $this->getAdminListHeader(),
        ];

        if (auth()->user()->can('interactivesolutions_rivile_routes_rivile_clients_create')) {
            $config['actions'][] = 'new';
        }

        if (auth()->user()->can('interactivesolutions_rivile_routes_rivile_clients_update')) {
            $config['actions'][] = 'update';
            $config['actions'][] = 'restore';
        }

        if (auth()->user()->can('interactivesolutions_rivile_routes_rivile_clients_delete')) {
            $config['actions'][] = 'delete';
        }

        $config['actions'][] = 'search';
        $config['filters'] = $this->getFilters();
        $config['popUpLabel'] = 'N08_PAV';

        return hcview('HCCoreUI::admin.content.list', ['config' => $config]);
    }

    /**
     * Creating Admin List Header based on Main Table
     *
     * @return array
     */
    public function getAdminListHeader(): array
    {
        return [
            'N08_PVM_KODAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_clients.N08_PVM_KODAS'),
            ],
            'N08_IM_KODAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_clients.N08_IM_KODAS'),
            ],
            'N08_PAV' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_clients.N08_PAV'),
            ],
            'N08_ATSTOVAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_clients.N08_ATSTOVAS'),
            ],
            'N08_E_MAIL' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_clients.N08_E_MAIL'),
            ],

        ];
    }

    /**
     * Generating filters required for admin view
     *
     * @return array
     */
    public function getFilters(): array
    {
        $filters = [];

        return $filters;
    }

    /**
     * Create item
     *
     * @return mixed
     */
    protected function __apiStore()
    {
        $data = $this->getInputData();

        $record = N08Klij::create(array_get($data, 'record'));

        \Artisan::call('rivile:export-client', ['action' => 'new', 'id' => $record->id]);

        return $this->apiShow($record->id);
    }

    /**
     * Getting user data on POST call
     *
     * @return mixed
     */
    protected function getInputData()
    {
        (new HCRivileClientsValidator())->validateForm();

        $_data = request()->all();

        if (array_has($_data, 'id')) {
            array_set($data, 'record.id', array_get($_data, 'id'));
        }

        array_set($data, 'record.COUNT', array_get($_data, 'count'));
        array_set($data, 'record.N08_KODAS_KS', array_get($_data, 'N08_KODAS_KS'));
        array_set($data, 'record.N08_RUSIS', array_get($_data, 'N08_RUSIS'));
        array_set($data, 'record.N08_PVM_KODAS', array_get($_data, 'N08_PVM_KODAS'));
        array_set($data, 'record.N08_IM_KODAS', array_get($_data, 'N08_IM_KODAS'));
        array_set($data, 'record.N08_PAV', array_get($_data, 'N08_PAV'));
        array_set($data, 'record.N08_ADR', array_get($_data, 'N08_ADR'));
        array_set($data, 'record.N08_KODAS_VS', array_get($_data, 'N08_KODAS_VS'));
        array_set($data, 'record.N08_PASTAS', array_get($_data, 'N08_PASTAS'));
        array_set($data, 'record.N08_ATSTOVAS', array_get($_data, 'N08_ATSTOVAS'));
        array_set($data, 'record.N08_E_MAIL', array_get($_data, 'N08_E_MAIL'));
        array_set($data, 'record.N08_FAX_NUM', array_get($_data, 'N08_FAX_NUM'));
        array_set($data, 'record.N08_TEL', array_get($_data, 'N08_TEL'));
        array_set($data, 'record.N08_MOB_TEL', array_get($_data, 'N08_MOB_TEL'));
        array_set($data, 'record.N08_KODAS_LS_1', array_get($_data, 'N08_KODAS_LS_1'));
        array_set($data, 'record.N08_KODAS_LS_2', array_get($_data, 'N08_KODAS_LS_2'));
        array_set($data, 'record.N08_KODAS_LS_3', array_get($_data, 'N08_KODAS_LS_3'));
        array_set($data, 'record.N08_KODAS_LS_4', array_get($_data, 'N08_KODAS_LS_4'));
        array_set($data, 'record.N08_TIPAS_PIRK', array_get($_data, 'N08_TIPAS_PIRK'));
        array_set($data, 'record.N08_TIPAS_TIEK', array_get($_data, 'N08_TIPAS_TIEK'));
        array_set($data, 'record.N08_KODAS_GS', array_get($_data, 'N08_KODAS_GS'));
        array_set($data, 'record.N08_CREDIT_LIM', array_get($_data, 'N08_CREDIT_LIM'));
        array_set($data, 'record.N08_KODAS_DS', array_get($_data, 'N08_KODAS_DS'));
        array_set($data, 'record.N08_DELSPINIGIAI', array_get($_data, 'N08_DELSPINIGIAI'));
        array_set($data, 'record.N08_KODAS_QS', array_get($_data, 'N08_KODAS_QS'));
        array_set($data, 'record.N08_NUOL_GR', array_get($_data, 'N08_NUOL_GR'));
        array_set($data, 'record.N08_KODAS_XS_T', array_get($_data, 'N08_KODAS_XS_T'));
        array_set($data, 'record.N08_KODAS_XS_P', array_get($_data, 'N08_KODAS_XS_P'));
        array_set($data, 'record.N08_KODAS_TS_T', array_get($_data, 'N08_KODAS_TS_T'));
        array_set($data, 'record.N08_KODAS_TS_P', array_get($_data, 'N08_KODAS_TS_P'));
        array_set($data, 'record.N08_ADD_DATE', array_get($_data, 'N08_ADD_DATE'));
        array_set($data, 'record.N08_SUTARTIS', array_get($_data, 'N08_SUTARTIS'));
        array_set($data, 'record.N08_KAIN_ABC', array_get($_data, 'N08_KAIN_ABC'));
        array_set($data, 'record.N08_DIENOS', array_get($_data, 'N08_DIENOS'));
        array_set($data, 'record.N08_TIEK_DIEN', array_get($_data, 'N08_TIEK_DIEN'));
        array_set($data, 'record.N08_KRED_LIM', array_get($_data, 'N08_KRED_LIM'));
        array_set($data, 'record.N08_PRIEDAI', array_get($_data, 'N08_PRIEDAI'));
        array_set($data, 'record.N08_KODAS_IS', array_get($_data, 'N08_KODAS_IS'));
        array_set($data, 'record.N08_KODAS_OS_P', array_get($_data, 'N08_KODAS_OS_P'));
        array_set($data, 'record.N08_KODAS_OS', array_get($_data, 'N08_KODAS_OS'));
        array_set($data, 'record.N08_KODAS_MS_P', array_get($_data, 'N08_KODAS_MS_P'));
        array_set($data, 'record.N08_KODAS_MS_T', array_get($_data, 'N08_KODAS_MS_T'));
        array_set($data, 'record.N08_VAL_POZ', array_get($_data, 'N08_VAL_POZ'));
        array_set($data, 'record.N08_KODAS_VL_1', array_get($_data, 'N08_KODAS_VL_1'));
        array_set($data, 'record.N08_KODAS_VL_2', array_get($_data, 'N08_KODAS_VL_2'));
        array_set($data, 'record.N08_KODAS_VL_3', array_get($_data, 'N08_KODAS_VL_3'));
        array_set($data, 'record.N08_KODAS_VL_4', array_get($_data, 'N08_KODAS_VL_4'));
        array_set($data, 'record.N08_KODAS_VL_5', array_get($_data, 'N08_KODAS_VL_5'));
        array_set($data, 'record.N08_KODAS_VL_6', array_get($_data, 'N08_KODAS_VL_6'));
        array_set($data, 'record.N08_POZ_DATE', array_get($_data, 'N08_POZ_DATE'));
        array_set($data, 'record.N08_BEG_DATE', array_get($_data, 'N08_BEG_DATE'));
        array_set($data, 'record.N08_END_DATE', array_get($_data, 'N08_END_DATE'));
        array_set($data, 'record.N08_ADDUSR', array_get($_data, 'N08_ADDUSR'));
        array_set($data, 'record.N08_USERIS', array_get($_data, 'N08_USERIS'));
        array_set($data, 'record.N08_R_DATE', array_get($_data, 'N08_R_DATE'));
        array_set($data, 'record.N08_GER_POZ', array_get($_data, 'N08_GER_POZ'));
        array_set($data, 'record.N08_KODAS_LS_5', array_get($_data, 'N08_KODAS_LS_5'));
        array_set($data, 'record.N08_KODAS_LS_6', array_get($_data, 'N08_KODAS_LS_6'));
        array_set($data, 'record.N08_KODAS_LS_7', array_get($_data, 'N08_KODAS_LS_7'));
        array_set($data, 'record.N08_KODAS_LS_8', array_get($_data, 'N08_KODAS_LS_8'));
        array_set($data, 'record.N08_T_LIM_POZ', array_get($_data, 'N08_T_LIM_POZ'));
        array_set($data, 'record.N08_T_KRED_LIM', array_get($_data, 'N08_T_KRED_LIM'));
        array_set($data, 'record.N08_KODAS_VL_LIM', array_get($_data, 'N08_KODAS_VL_LIM'));
        array_set($data, 'record.N08_KAINYNAS', array_get($_data, 'N08_KAINYNAS'));
        array_set($data, 'record.N08_AR_REIK_P', array_get($_data, 'N08_AR_REIK_P'));
        array_set($data, 'record.N08_AR_REIK_T', array_get($_data, 'N08_AR_REIK_T'));
        array_set($data, 'record.N08_REZERVAS', array_get($_data, 'N08_REZERVAS'));
        array_set($data, 'record.N08_INTRASTAT', array_get($_data, 'N08_INTRASTAT'));
        array_set($data, 'record.N08_WB_KR', array_get($_data, 'N08_WB_KR'));
        array_set($data, 'record.N08_WB_KR_GR', array_get($_data, 'N08_WB_KR_GR'));
        array_set($data, 'record.N08_SUMA_WK_LIMIT', array_get($_data, 'N08_SUMA_WK_LIMIT'));
        array_set($data, 'record.N08_SUMA_WK', array_get($_data, 'N08_SUMA_WK'));
        array_set($data, 'record.N08_KODAS_VL_U', array_get($_data, 'N08_KODAS_VL_U'));

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

        $select = N08Klij::getFillableFields();

        $record = N08Klij::with($with)
            ->select($select)
            ->where('id', $id)
            ->firstOrFail();

        return $record;
    }

    /**
     * Updates existing item based on ID
     *
     * @param $id
     * @return mixed
     */
    protected function __apiUpdate(string $id)
    {
        $record = N08Klij::findOrFail($id);

        $data = $this->getInputData();

        $record->update(array_get($data, 'record', []));
        Artisan::call('rivile:export-client', ['action' => 'update', 'id' => $record->id]);

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
        N08Klij::where('id', $id)->update(request()->all());

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
        N08Klij::destroy($list);

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
        N08Klij::onlyTrashed()->whereIn('id', $list)->forceDelete();

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
        N08Klij::whereIn('id', $list)->restore();

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
            $select = N08Klij::getFillableFields();
        }

        $list = N08Klij::with($with)->select($select)
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
            $query->where('count', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_KS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_RUSIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_PVM_KODAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_IM_KODAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_PAV', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_ADR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_PASTAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_ATSTOVAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_E_MAIL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_FAX_NUM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_TEL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_MOB_TEL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_3', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_4', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_TIPAS_PIRK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_TIPAS_TIEK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_GS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_CREDIT_LIM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_DS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_DELSPINIGIAI', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_QS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_NUOL_GR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_XS_T', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_XS_P', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_TS_T', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_TS_P', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_ADD_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_SUTARTIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KAIN_ABC', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_DIENOS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_TIEK_DIEN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KRED_LIM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_PRIEDAI', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_IS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_OS_P', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_OS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_MS_P', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_MS_T', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_VAL_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_3', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_4', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_5', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_6', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_POZ_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_BEG_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_END_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_ADDUSR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_USERIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_R_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_GER_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_5', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_6', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_7', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_LS_8', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_T_LIM_POZ', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_T_KRED_LIM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_LIM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KAINYNAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_AR_REIK_P', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_AR_REIK_T', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_REZERVAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_INTRASTAT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_WB_KR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_WB_KR_GR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_SUMA_WK_LIMIT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_SUMA_WK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('N08_KODAS_VL_U', 'LIKE', '%' . $phrase . '%');
        });
    }
}
