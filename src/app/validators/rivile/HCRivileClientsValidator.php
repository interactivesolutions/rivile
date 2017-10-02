<?php namespace interactivesolutions\rivile\app\validators\rivile;

use interactivesolutions\honeycombcore\http\controllers\HCCoreFormValidator;

class HCRivileClientsValidator extends HCCoreFormValidator
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'N08_KODAS_DS' => 'required',
            'N08_KODAS_KS' => 'required',
        ];
    }
}