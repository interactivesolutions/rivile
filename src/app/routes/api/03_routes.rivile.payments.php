<?php

Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function ()
{
    Route::group(['prefix' => 'v1/rivile/payments'], function ()
    {
        Route::get('/', ['as' => 'api.v1.routes.rivile.payments', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list'], 'uses' => 'rivile\\HCRivilePaymentsController@apiIndexPaginate']);
        Route::post('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_create'], 'uses' => 'rivile\\HCRivilePaymentsController@apiStore']);
        Route::delete('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_delete'], 'uses' => 'rivile\\HCRivilePaymentsController@apiDestroy']);

        Route::group(['prefix' => 'list'], function ()
        {
            Route::get('/', ['as' => 'api.v1.routes.rivile.payments.list', 'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_payments_list'], 'uses' => 'rivile\\HCRivilePaymentsController@apiList']);
            Route::get('{timestamp}', ['as' => 'api.v1.routes.rivile.payments.list.update', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list'], 'uses' => 'rivile\\HCRivilePaymentsController@apiIndexSync']);
        });

        Route::post('restore', ['as' => 'api.v1.routes.rivile.payments.restore', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_update'], 'uses' => 'rivile\\HCRivilePaymentsController@apiRestore']);
        Route::post('merge', ['as' => 'api.v1.routes.rivile.payments.merge', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_create', 'acl-apps:interactivesolutions_rivile_routes_rivile_payments_delete'], 'uses' => 'rivile\\HCRivilePaymentsController@apiMerge']);
        Route::delete('force', ['as' => 'api.v1.routes.rivile.payments.force', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_force_delete'], 'uses' => 'rivile\\HCRivilePaymentsController@apiForceDelete']);

        Route::group(['prefix' => '{id}'], function ()
        {
            Route::get('/', ['as' => 'api.v1.routes.rivile.payments.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list'], 'uses' => 'rivile\\HCRivilePaymentsController@apiShow']);
            Route::put('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_update'], 'uses' => 'rivile\\HCRivilePaymentsController@apiUpdate']);
            Route::delete('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_delete'], 'uses' => 'rivile\\HCRivilePaymentsController@apiDestroy']);

            Route::put('strict', ['as' => 'api.v1.routes.rivile.payments.update.strict', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_update'], 'uses' => 'rivile\\HCRivilePaymentsController@apiUpdateStrict']);
            Route::post('duplicate', ['as' => 'api.v1.routes.rivile.payments.duplicate.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list', 'acl-apps:interactivesolutions_rivile_routes_rivile_payments_create'], 'uses' => 'rivile\\HCRivilePaymentsController@apiDuplicate']);
            Route::delete('force', ['as' => 'api.v1.routes.rivile.payments.force.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_force_delete'], 'uses' => 'rivile\\HCRivilePaymentsController@apiForceDelete']);
        });
    });
});