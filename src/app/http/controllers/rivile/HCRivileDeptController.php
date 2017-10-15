<?php

namespace interactivesolutions\rivile\app\http\controllers\rivile;

use Illuminate\Database\Eloquent\Builder;
use interactivesolutions\honeycombcore\http\controllers\HCBaseController;
use interactivesolutions\rivile\app\models\rivile\HCRivileDept;
use interactivesolutions\rivile\app\validators\rivile\HCRivileDeptValidator;

class HCRivileDeptController extends HCBaseController
{

    //TODO recordsPerPage setting

    /**
     * Returning configured admin view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminIndex ()
    {
        $config = [
            'title'       => trans('Rivile::rivile_dept.page_title'),
            'listURL'     => route('admin.api.routes.rivile.dept'),
            'newFormUrl'  => route('admin.api.form-manager', ['rivile-dept-new']),
            'editFormUrl' => route('admin.api.form-manager', ['rivile-dept-edit']),
            'imagesUrl'   => route('resource.get', ['/']),
            'headers'     => $this->getAdminListHeader(),
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
    public function getAdminListHeader ()
    {
        return [
            'COUNT'          => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.COUNT'),
            ],
            'I44_MODUL'      => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_MODUL'),
            ],
            'I44_KODAS_OP'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_OP'),
            ],
            'I44_EIL_NR'     => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_EIL_NR'),
            ],
            'I44_TIPAS'      => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_TIPAS'),
            ],
            'I44_DOK_NR'     => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_DOK_NR'),
            ],
            'I44_KODAS_KS'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_KS'),
            ],
            'I44_KODAS_MS'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_MS'),
            ],
            'I44_KODAS_IS'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_IS'),
            ],
            'I44_KODAS_OS'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_OS'),
            ],
            'I44_KODAS_OS_C' => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_OS_C'),
            ],
            'I44_KODAS_SS'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_SS'),
            ],
            'I44_DATA_DOK'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_DATA_DOK'),
            ],
            'I44_DATA_MOK'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_DATA_MOK'),
            ],
            'I44_DATA_DSK'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_DATA_DSK'),
            ],
            'I44_DSK_PROC'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_DSK_PROC'),
            ],
            'I44_SUMA_DB'    => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_SUMA_DB'),
            ],
            'I44_SUMA_CR'    => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_SUMA_CR'),
            ],
            'I44_KODAS_VL'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_VL'),
            ],
            'I44_SUMA_DB_VL' => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_SUMA_DB_VL'),
            ],
            'I44_SUMA_CR_VL' => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_SUMA_CR_VL'),
            ],
            'I44_SUMA_PLK'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_SUMA_PLK'),
            ],
            'I44_SAVIKAINA'  => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_SAVIKAINA'),
            ],
            'I44_PVM'        => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_PVM'),
            ],
            'I44_PASTABOS'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_PASTABOS'),
            ],
            'I44_ADDUSR'     => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_ADDUSR'),
            ],
            'I44_R_DATE'     => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_R_DATE'),
            ],
            'I44_USERIS'     => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_USERIS'),
            ],
            'I44_KODAS_KT'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_KT'),
            ],
            'I44_KODAS_K0'   => [
                "type"  => "text",
                "label" => trans('Rivile::rivile_dept.I44_KODAS_K0'),
            ],

        ];
    }

    /**
     * Create item
     *
     * @return mixed
     */
    protected function __apiStore ()
    {
        $data = $this->getInputData();

        $record = HCRivileDept::create(array_get($data, 'record'));

        return $this->apiShow($record->id);
    }

    /**
     * Updates existing item based on ID
     *
     * @param $id
     * @return mixed
     */
    protected function __apiUpdate (string $id)
    {
        $record = HCRivileDept::findOrFail($id);

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
    protected function __apiUpdateStrict (string $id)
    {
        HCRivileDept::where('id', $id)->update(request()->all());

        return $this->apiShow($id);
    }

    /**
     * Delete records table
     *
     * @param $list
     * @return mixed
     */
    protected function __apiDestroy (array $list)
    {
        HCRivileDept::destroy($list);

        return hcSuccess();
    }

    /**
     * Delete records table
     *
     * @param $list
     * @return mixed
     */
    protected function __apiForceDelete (array $list)
    {
        HCRivileDept::onlyTrashed()->whereIn('id', $list)->forceDelete();

        return hcSuccess();
    }

    /**
     * Restore multiple records
     *
     * @param $list
     * @return mixed
     */
    protected function __apiRestore (array $list)
    {
        HCRivileDept::whereIn('id', $list)->restore();

        return hcSuccess();
    }

    /**
     * Creating data query
     *
     * @param array $select
     * @return mixed
     */
    protected function createQuery (array $select = null)
    {
        $with = [];

        if ($select == null)
            $select = HCRivileDept::getFillableFields();

        $list = HCRivileDept::with($with)->select($select)
            // add filters
            ->where(function ($query) use ($select) {
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
    protected function searchQuery (Builder $query, string $phrase)
    {
        return $query->where(function (Builder $query) use ($phrase) {
            $query->where('COUNT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_MODUL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_OP', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_EIL_NR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_TIPAS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_DOK_NR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_KS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_MS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_IS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_OS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_OS_C', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_SS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_DATA_DOK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_DATA_MOK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_DATA_DSK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_DSK_PROC', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_SUMA_DB', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_SUMA_CR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_VL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_SUMA_DB_VL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_SUMA_CR_VL', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_SUMA_PLK', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_SAVIKAINA', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_PVM', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_PASTABOS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_ADDUSR', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_R_DATE', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_USERIS', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_KT', 'LIKE', '%' . $phrase . '%')
                ->orWhere('I44_KODAS_K0', 'LIKE', '%' . $phrase . '%');
        });
    }

    /**
     * Getting user data on POST call
     *
     * @return mixed
     */
    protected function getInputData ()
    {
        (new HCRivileDeptValidator())->validateForm();

        $_data = request()->all();

        if (array_has($_data, 'id'))
            array_set($data, 'record.id', array_get($_data, 'id'));

        array_set($data, 'record.COUNT', array_get($_data, 'COUNT'));
        array_set($data, 'record.I44_MODUL', array_get($_data, 'I44_MODUL'));
        array_set($data, 'record.I44_KODAS_OP', array_get($_data, 'I44_KODAS_OP'));
        array_set($data, 'record.I44_EIL_NR', array_get($_data, 'I44_EIL_NR'));
        array_set($data, 'record.I44_TIPAS', array_get($_data, 'I44_TIPAS'));
        array_set($data, 'record.I44_DOK_NR', array_get($_data, 'I44_DOK_NR'));
        array_set($data, 'record.I44_KODAS_KS', array_get($_data, 'I44_KODAS_KS'));
        array_set($data, 'record.I44_KODAS_MS', array_get($_data, 'I44_KODAS_MS'));
        array_set($data, 'record.I44_KODAS_IS', array_get($_data, 'I44_KODAS_IS'));
        array_set($data, 'record.I44_KODAS_OS', array_get($_data, 'I44_KODAS_OS'));
        array_set($data, 'record.I44_KODAS_OS_C', array_get($_data, 'I44_KODAS_OS_C'));
        array_set($data, 'record.I44_KODAS_SS', array_get($_data, 'I44_KODAS_SS'));
        array_set($data, 'record.I44_DATA_DOK', array_get($_data, 'I44_DATA_DOK'));
        array_set($data, 'record.I44_DATA_MOK', array_get($_data, 'I44_DATA_MOK'));
        array_set($data, 'record.I44_DATA_DSK', array_get($_data, 'I44_DATA_DSK'));
        array_set($data, 'record.I44_DSK_PROC', array_get($_data, 'I44_DSK_PROC'));
        array_set($data, 'record.I44_SUMA_DB', array_get($_data, 'I44_SUMA_DB'));
        array_set($data, 'record.I44_SUMA_CR', array_get($_data, 'I44_SUMA_CR'));
        array_set($data, 'record.I44_KODAS_VL', array_get($_data, 'I44_KODAS_VL'));
        array_set($data, 'record.I44_SUMA_DB_VL', array_get($_data, 'I44_SUMA_DB_VL'));
        array_set($data, 'record.I44_SUMA_CR_VL', array_get($_data, 'I44_SUMA_CR_VL'));
        array_set($data, 'record.I44_SUMA_PLK', array_get($_data, 'I44_SUMA_PLK'));
        array_set($data, 'record.I44_SAVIKAINA', array_get($_data, 'I44_SAVIKAINA'));
        array_set($data, 'record.I44_PVM', array_get($_data, 'I44_PVM'));
        array_set($data, 'record.I44_PASTABOS', array_get($_data, 'I44_PASTABOS'));
        array_set($data, 'record.I44_ADDUSR', array_get($_data, 'I44_ADDUSR'));
        array_set($data, 'record.I44_R_DATE', array_get($_data, 'I44_R_DATE'));
        array_set($data, 'record.I44_USERIS', array_get($_data, 'I44_USERIS'));
        array_set($data, 'record.I44_KODAS_KT', array_get($_data, 'I44_KODAS_KT'));
        array_set($data, 'record.I44_KODAS_K0', array_get($_data, 'I44_KODAS_K0'));

        return makeEmptyNullable($data);
    }

    /**
     * Getting single record
     *
     * @param $id
     * @return mixed
     */
    public function apiShow (string $id)
    {
        $with = [];

        $select = HCRivileDept::getFillableFields();

        $record = HCRivileDept::with($with)
            ->select($select)
            ->where('id', $id)
            ->firstOrFail();

        return $record;
    }

    /**
     * Generating filters required for admin view
     *
     * @return array
     */
    public function getFilters ()
    {
        $filters = [];

        return $filters;
    }
}
