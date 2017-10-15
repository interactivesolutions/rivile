<?php namespace interactivesolutions\rivile\app\validators\rivile;

use interactivesolutions\honeycombcore\http\controllers\HCCoreFormValidator;

class HCRivileDeptValidator extends HCCoreFormValidator
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