<?php

namespace InteractiveSolutions\Rivile\Validators\Rivile;

use InteractiveSolutions\HoneycombCore\Http\Controllers\HCCoreFormValidator;

class HCRivilePaymentsValidator extends HCCoreFormValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'COUNT' => 'required',

        ];
    }
}