<?php

return [
    /*
    |---------------------------------------------------------------------------
    | Rivile webservice URL
    |---------------------------------------------------------------------------
    */
    'url' => env('RIVILE_WEBSERVICE_URL', 'http://manorivile.lt/WEBSERVICE_RIV_WEB/awws/webservice.awws?wsdl'),

    /*
    |---------------------------------------------------------------------------
    | Rivile access key
    |---------------------------------------------------------------------------
    */
    'key' => env('RIVILE_ACCESS_KEY', ''),

    /*
    |---------------------------------------------------------------------------
    | Rivile rows id prefix
    |---------------------------------------------------------------------------
    */
    'rivile_id_prefix' => env('RIVILE_ID_PREFIX', 'XXX')
];
