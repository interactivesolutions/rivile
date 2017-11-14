<?php

Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function() {
    Route::group(['prefix' => 'v1/rivile/payments'], function() {
        Route::get('/', [
            'as' => 'api.v1.routes.rivile.payments',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_create'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_delete'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiDestroy',
        ]);

        Route::group(['prefix' => 'list'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.payments.list',
                'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_payments_list'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiList',
            ]);
            Route::get('{timestamp}', [
                'as' => 'api.v1.routes.rivile.payments.list.update',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiIndexSync',
            ]);
        });

        Route::post('restore', [
            'as' => 'api.v1.routes.rivile.payments.restore',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_update'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.payments.merge',
            'middleware' => [
                'acl-apps:interactivesolutions_rivile_routes_rivile_payments_create',
                'acl-apps:interactivesolutions_rivile_routes_rivile_payments_delete',
            ],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'api.v1.routes.rivile.payments.force',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_force_delete'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.payments.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_list'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_update'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_delete'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'api.v1.routes.rivile.payments.update.strict',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_update'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'api.v1.routes.rivile.payments.duplicate.single',
                'middleware' => [
                    'acl-apps:interactivesolutions_rivile_routes_rivile_payments_list',
                    'acl-apps:interactivesolutions_rivile_routes_rivile_payments_create',
                ],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'api.v1.routes.rivile.payments.force.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_payments_force_delete'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiForceDelete',
            ]);
        });
    });
});