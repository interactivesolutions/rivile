<?php

namespace InteractiveSolutions\Rivile\Http\Controllers\Rivile;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use InteractiveSolutions\HoneycombCore\Http\Controllers\HCBaseController;
use InteractiveSolutions\Rivile\Models\I04Ath;
use InteractiveSolutions\Rivile\Validators\Rivile\HCRivilePaymentsValidator;

class HCRivilePaymentsController extends HCBaseController
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
            'title' => trans('Rivile::rivile_payments.page_title'),
            'listURL' => route('admin.api.routes.rivile.payments'),
            'newFormUrl' => route('admin.api.form-manager', ['rivile-payments-new']),
            'editFormUrl' => route('admin.api.form-manager', ['rivile-payments-edit']),
            'imagesUrl' => route('resource.get', ['/']),
            'headers' => $this->getAdminListHeader(),
        ];

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
            'I04_KODAS_CH' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_CH'),
            ],
            'I04_DOK_NR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_DOK_NR'),
            ],
            'I04_OP_RUSIS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_OP_RUSIS'),
            ],
            'I04_OP_TIPAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_OP_TIPAS'),
            ],
            'I04_OP_STORNO' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_OP_STORNO'),
            ],
            'I04_OP_DATA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_OP_DATA'),
            ],
            'I04_KODAS_SS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_SS'),
            ],
            'I04_MOKETOJAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_MOKETOJAS'),
            ],
            'I04_KODAS_KS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_KS'),
            ],
            'I04_PAV' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_PAV'),
            ],
            'I04_ADR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_ADR'),
            ],
            'I04_ATSTOVAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_ATSTOVAS'),
            ],
            'I04_KODAS_VS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_VS'),
            ],
            'I04_SUMA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_SUMA'),
            ],
            'I04_SUMA_DSK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_SUMA_DSK'),
            ],
            'I04_SUMA_PLK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_SUMA_PLK'),
            ],
            'I04_PASTABOS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_PASTABOS'),
            ],
            'I04_PERKELTA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_PERKELTA'),
            ],
            'I04_IMP_EXP' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_IMP_EXP'),
            ],
            'I04_KODAS_VL' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_VL'),
            ],
            'I04_SUMA_VAL' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_SUMA_VAL'),
            ],
            'I04_KOEF' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KOEF'),
            ],
            'I04_USERIS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_USERIS'),
            ],
            'I04_R_DATE' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_R_DATE'),
            ],
            'I04_ADDUSR' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_ADDUSR'),
            ],
            'I04_KODAS_SM' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_SM'),
            ],
            'I04_APRASYMAS' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_APRASYMAS'),
            ],
            'I04_SUMA_PER' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_SUMA_PER'),
            ],
            'I04_SUMA_WK' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_SUMA_WK'),
            ],
            'I04_KODAS_LS_1' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_LS_1'),
            ],
            'I04_KODAS_LS_2' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_LS_2'),
            ],
            'I04_KODAS_LS_3' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_LS_3'),
            ],
            'I04_KODAS_LS_4' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_LS_4'),
            ],
            'I04_KODAS_ZN' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_KODAS_ZN'),
            ],
            'I04_BUSENA' => [
                "type" => "text",
                "label" => trans('Rivile::rivile_payments.I04_BUSENA'),
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

        $record = I04Ath::create(array_get($data, 'record'));

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
        (new HCRivilePaymentsValidator())->validateForm();

        $_data = request()->all();

        if (array_has($_data, 'id')) {
            array_set($data, 'record.id', array_get($_data, 'id'));
        }

        array_set($data, 'record.COUNT', array_get($_data, 'COUNT'));
        array_set($data, 'record.I04_KODAS_CH', array_get($_data, 'I04_KODAS_CH'));
        array_set($data, 'record.I04_DOK_NR', array_get($_data, 'I04_DOK_NR'));
        array_set($data, 'record.I04_OP_RUSIS', array_get($_data, 'I04_OP_RUSIS'));
        array_set($data, 'record.I04_OP_TIPAS', array_get($_data, 'I04_OP_TIPAS'));
        array_set($data, 'record.I04_OP_STORNO', array_get($_data, 'I04_OP_STORNO'));
        array_set($data, 'record.I04_OP_DATA', array_get($_data, 'I04_OP_DATA'));
        array_set($data, 'record.I04_KODAS_SS', array_get($_data, 'I04_KODAS_SS'));
        array_set($data, 'record.I04_MOKETOJAS', array_get($_data, 'I04_MOKETOJAS'));
        array_set($data, 'record.I04_KODAS_KS', array_get($_data, 'I04_KODAS_KS'));
        array_set($data, 'record.I04_PAV', array_get($_data, 'I04_PAV'));
        array_set($data, 'record.I04_ADR', array_get($_data, 'I04_ADR'));
        array_set($data, 'record.I04_ATSTOVAS', array_get($_data, 'I04_ATSTOVAS'));
        array_set($data, 'record.I04_KODAS_VS', array_get($_data, 'I04_KODAS_VS'));
        array_set($data, 'record.I04_SUMA', array_get($_data, 'I04_SUMA'));
        array_set($data, 'record.I04_SUMA_DSK', array_get($_data, 'I04_SUMA_DSK'));
        array_set($data, 'record.I04_SUMA_PLK', array_get($_data, 'I04_SUMA_PLK'));
        array_set($data, 'record.I04_PASTABOS', array_get($_data, 'I04_PASTABOS'));
        array_set($data, 'record.I04_PERKELTA', array_get($_data, 'I04_PERKELTA'));
        array_set($data, 'record.I04_IMP_EXP', array_get($_data, 'I04_IMP_EXP'));
        array_set($data, 'record.I04_KODAS_VL', array_get($_data, 'I04_KODAS_VL'));
        array_set($data, 'record.I04_SUMA_VAL', array_get($_data, 'I04_SUMA_VAL'));
        array_set($data, 'record.I04_KOEF', array_get($_data, 'I04_KOEF'));
        array_set($data, 'record.I04_USERIS', array_get($_data, 'I04_USERIS'));
        array_set($data, 'record.I04_R_DATE', array_get($_data, 'I04_R_DATE'));
        array_set($data, 'record.I04_ADDUSR', array_get($_data, 'I04_ADDUSR'));
        array_set($data, 'record.I04_KODAS_SM', array_get($_data, 'I04_KODAS_SM'));
        array_set($data, 'record.I04_APRASYMAS', array_get($_data, 'I04_APRASYMAS'));
        array_set($data, 'record.I04_SUMA_PER', array_get($_data, 'I04_SUMA_PER'));
        array_set($data, 'record.I04_SUMA_WK', array_get($_data, 'I04_SUMA_WK'));
        array_set($data, 'record.I04_KODAS_LS_1', array_get($_data, 'I04_KODAS_LS_1'));
        array_set($data, 'record.I04_KODAS_LS_2', array_get($_data, 'I04_KODAS_LS_2'));
        array_set($data, 'record.I04_KODAS_LS_3', array_get($_data, 'I04_KODAS_LS_3'));
        array_set($data, 'record.I04_KODAS_LS_4', array_get($_data, 'I04_KODAS_LS_4'));
        array_set($data, 'record.I04_KODAS_ZN', array_get($_data, 'I04_KODAS_ZN'));
        array_set($data, 'record.I04_BUSENA', array_get($_data, 'I04_BUSENA'));

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

        $select = I04Ath::getFillableFields();

        $record = I04Ath::with($with)
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
        $record = I04Ath::findOrFail($id);

        $data = $this->getInputData();

        $record->update(array_get($data, 'record', []));

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
        I04Ath::where('id', $id)->update(request()->all());

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
        I04Ath::destroy($list);

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
        I04Ath::onlyTrashed()->whereIn('id', $list)->forceDelete();

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
        I04Ath::whereIn('id', $list)->restore();

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
            $select = I04Ath::getFillableFields();
        }

        $list = I04Ath::with($with)->select($select)
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
                ->orWhere('I04_KODAS_CH', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_DOK_NR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_OP_RUSIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_OP_TIPAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_OP_STORNO', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_OP_DATA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_SS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_MOKETOJAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_KS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_PAV', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_ADR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_ATSTOVAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_VS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_SUMA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_SUMA_DSK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_SUMA_PLK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_PASTABOS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_PERKELTA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_IMP_EXP', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_VL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_SUMA_VAL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KOEF', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_USERIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_R_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_ADDUSR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_SM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_APRASYMAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_SUMA_PER', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_SUMA_WK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_LS_1', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_LS_2', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_LS_3', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_LS_4', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_KODAS_ZN', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I04_BUSENA', 'LIKE', '%' . $phrase . '%');
        });
    }
}
