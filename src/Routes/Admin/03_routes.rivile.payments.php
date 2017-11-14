<?php

Route::group(['prefix' => config('hc.admin_url'), 'middleware' => ['web', 'auth']], function() {
    Route::get('rivile/payments', [
        'as' => 'admin.routes.rivile.payments.index',
        'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_list'],
        'uses' => 'Rivile\\HCRivilePaymentsController@adminIndex',
    ]);

    Route::group(['prefix' => 'api/rivile/payments'], function() {
        Route::get('/', [
            'as' => 'admin.api.routes.rivile.payments',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_list'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_create'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_delete'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiDestroy',
        ]);

        Route::get('list', [
            'as' => 'admin.api.routes.rivile.payments.list',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_list'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiIndex',
        ]);
        Route::post('restore', [
            'as' => 'admin.api.routes.rivile.payments.restore',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_update'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.payments.merge',
            'middleware' => [
                'acl:interactivesolutions_rivile_routes_rivile_payments_create',
                'acl:interactivesolutions_rivile_routes_rivile_payments_delete',
            ],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'admin.api.routes.rivile.payments.force',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_force_delete'],
            'uses' => 'Rivile\\HCRivilePaymentsController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'admin.api.routes.rivile.payments.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_list'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_update'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_delete'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'admin.api.routes.rivile.payments.update.strict',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_update'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'admin.api.routes.rivile.payments.duplicate.single',
                'middleware' => [
                    'acl:interactivesolutions_rivile_routes_rivile_payments_list',
                    'acl:interactivesolutions_rivile_routes_rivile_payments_create',
                ],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'admin.api.routes.rivile.payments.force.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_payments_force_delete'],
                'uses' => 'Rivile\\HCRivilePaymentsController@apiForceDelete',
            ]);
        });
    });
});
