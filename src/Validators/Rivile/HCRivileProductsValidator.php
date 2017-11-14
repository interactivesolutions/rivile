<?php

namespace InteractiveSolutions\Rivile\Validators\Rivile;

use InteractiveSolutions\HoneycombCore\Http\Controllers\HCCoreFormValidator;

class HCRivileProductsValidator extends HCCoreFormValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'N08_KODAS_KS' => 'required',
            'N08_RUSIS' => 'required',
            //    'N08_PVM_KODAS' => 'required',
            //    'N08_IM_KODAS' => 'required',
            //    'N08_PAV' => 'required',
            //    'N08_TIPAS_PIRK' => 'required',
            //    'N08_TIPAS_TIEK' => 'required',
            'N08_KODAS_DS' => 'required',
            //    'N08_KODAS_XS_T' => 'required',
            //    'N08_KODAS_XS_P' => 'required',

        ];
    }
}