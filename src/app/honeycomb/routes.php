<?php

//interactivesolutions/rivile/src/Routes/Admin/01_routes.rivile.clients.php


Route::group(['prefix' => config('hc.admin_url'), 'middleware' => ['web', 'auth']], function() {
    Route::get('rivile/clients', [
        'as' => 'admin.routes.rivile.clients.index',
        'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'],
        'uses' => 'Rivile\\HCRivileClientsController@adminIndex',
    ]);

    Route::group(['prefix' => 'api/rivile/clients'], function() {
        Route::get('/', [
            'as' => 'admin.api.routes.rivile.clients',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'],
            'uses' => 'Rivile\\HCRivileClientsController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_create'],
            'uses' => 'Rivile\\HCRivileClientsController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_delete'],
            'uses' => 'Rivile\\HCRivileClientsController@apiDestroy',
        ]);

        Route::get('list', [
            'as' => 'admin.api.routes.rivile.clients.list',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'],
            'uses' => 'Rivile\\HCRivileClientsController@apiIndex',
        ]);
        Route::post('restore', [
            'as' => 'admin.api.routes.rivile.clients.restore',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_update'],
            'uses' => 'Rivile\\HCRivileClientsController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.clients.merge',
            'middleware' => [
                'acl:interactivesolutions_rivile_routes_rivile_clients_create',
                'acl:interactivesolutions_rivile_routes_rivile_clients_delete',
            ],
            'uses' => 'Rivile\\HCRivileClientsController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'admin.api.routes.rivile.clients.force',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_force_delete'],
            'uses' => 'Rivile\\HCRivileClientsController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'admin.api.routes.rivile.clients.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'],
                'uses' => 'Rivile\\HCRivileClientsController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_update'],
                'uses' => 'Rivile\\HCRivileClientsController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_delete'],
                'uses' => 'Rivile\\HCRivileClientsController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'admin.api.routes.rivile.clients.update.strict',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_update'],
                'uses' => 'Rivile\\HCRivileClientsController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'admin.api.routes.rivile.clients.duplicate.single',
                'middleware' => [
                    'acl:interactivesolutions_rivile_routes_rivile_clients_list',
                    'acl:interactivesolutions_rivile_routes_rivile_clients_create',
                ],
                'uses' => 'Rivile\\HCRivileClientsController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'admin.api.routes.rivile.clients.force.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_force_delete'],
                'uses' => 'Rivile\\HCRivileClientsController@apiForceDelete',
            ]);
        });
    });
});



//interactivesolutions/rivile/src/Routes/Admin/02_routes.rivile.products.php


Route::group(['prefix' => config('hc.admin_url'), 'middleware' => ['web', 'auth']], function() {
    Route::get('rivile/products', [
        'as' => 'admin.routes.rivile.products.index',
        'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'],
        'uses' => 'Rivile\\HCRivileProductsController@adminIndex',
    ]);

    Route::group(['prefix' => 'api/rivile/products'], function() {
        Route::get('/', [
            'as' => 'admin.api.routes.rivile.products',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'],
            'uses' => 'Rivile\\HCRivileProductsController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_create'],
            'uses' => 'Rivile\\HCRivileProductsController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_delete'],
            'uses' => 'Rivile\\HCRivileProductsController@apiDestroy',
        ]);

        Route::get('list', [
            'as' => 'admin.api.routes.rivile.products.list',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'],
            'uses' => 'Rivile\\HCRivileProductsController@apiIndex',
        ]);
        Route::post('restore', [
            'as' => 'admin.api.routes.rivile.products.restore',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_update'],
            'uses' => 'Rivile\\HCRivileProductsController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.products.merge',
            'middleware' => [
                'acl:interactivesolutions_rivile_routes_rivile_products_create',
                'acl:interactivesolutions_rivile_routes_rivile_products_delete',
            ],
            'uses' => 'Rivile\\HCRivileProductsController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'admin.api.routes.rivile.products.force',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_force_delete'],
            'uses' => 'Rivile\\HCRivileProductsController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'admin.api.routes.rivile.products.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'],
                'uses' => 'Rivile\\HCRivileProductsController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_update'],
                'uses' => 'Rivile\\HCRivileProductsController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_delete'],
                'uses' => 'Rivile\\HCRivileProductsController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'admin.api.routes.rivile.products.update.strict',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_update'],
                'uses' => 'Rivile\\HCRivileProductsController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'admin.api.routes.rivile.products.duplicate.single',
                'middleware' => [
                    'acl:interactivesolutions_rivile_routes_rivile_products_list',
                    'acl:interactivesolutions_rivile_routes_rivile_products_create',
                ],
                'uses' => 'Rivile\\HCRivileProductsController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'admin.api.routes.rivile.products.force.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_force_delete'],
                'uses' => 'Rivile\\HCRivileProductsController@apiForceDelete',
            ]);
        });
    });
});



//interactivesolutions/rivile/src/Routes/Admin/03_routes.rivile.payments.php


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



//interactivesolutions/rivile/src/Routes/Admin/04_routes.rivile.dept.php


Route::group(['prefix' => config('hc.admin_url'), 'middleware' => ['web', 'auth']], function() {
    Route::get('rivile/dept', [
        'as' => 'admin.routes.rivile.dept.index',
        'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_list'],
        'uses' => 'Rivile\\HCRivileDeptController@adminIndex',
    ]);

    Route::group(['prefix' => 'api/rivile/dept'], function() {
        Route::get('/', [
            'as' => 'admin.api.routes.rivile.dept',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_list'],
            'uses' => 'Rivile\\HCRivileDeptController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_create'],
            'uses' => 'Rivile\\HCRivileDeptController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_delete'],
            'uses' => 'Rivile\\HCRivileDeptController@apiDestroy',
        ]);

        Route::get('list', [
            'as' => 'admin.api.routes.rivile.dept.list',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_list'],
            'uses' => 'Rivile\\HCRivileDeptController@apiIndex',
        ]);
        Route::post('restore', [
            'as' => 'admin.api.routes.rivile.dept.restore',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_update'],
            'uses' => 'Rivile\\HCRivileDeptController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.dept.merge',
            'middleware' => [
                'acl:interactivesolutions_rivile_routes_rivile_dept_create',
                'acl:interactivesolutions_rivile_routes_rivile_dept_delete',
            ],
            'uses' => 'Rivile\\HCRivileDeptController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'admin.api.routes.rivile.dept.force',
            'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_force_delete'],
            'uses' => 'Rivile\\HCRivileDeptController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'admin.api.routes.rivile.dept.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_list'],
                'uses' => 'Rivile\\HCRivileDeptController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_update'],
                'uses' => 'Rivile\\HCRivileDeptController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_delete'],
                'uses' => 'Rivile\\HCRivileDeptController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'admin.api.routes.rivile.dept.update.strict',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_update'],
                'uses' => 'Rivile\\HCRivileDeptController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'admin.api.routes.rivile.dept.duplicate.single',
                'middleware' => [
                    'acl:interactivesolutions_rivile_routes_rivile_dept_list',
                    'acl:interactivesolutions_rivile_routes_rivile_dept_create',
                ],
                'uses' => 'Rivile\\HCRivileDeptController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'admin.api.routes.rivile.dept.force.single',
                'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_dept_force_delete'],
                'uses' => 'Rivile\\HCRivileDeptController@apiForceDelete',
            ]);
        });
    });
});



//interactivesolutions/rivile/src/Routes/Api/01_routes.rivile.clients.php


Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function() {
    Route::group(['prefix' => 'v1/rivile/clients'], function() {
        Route::get('/', [
            'as' => 'api.v1.routes.rivile.clients',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list'],
            'uses' => 'Rivile\\HCRivileClientsController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_create'],
            'uses' => 'Rivile\\HCRivileClientsController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_delete'],
            'uses' => 'Rivile\\HCRivileClientsController@apiDestroy',
        ]);

        Route::group(['prefix' => 'list'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.clients.list',
                'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_clients_list'],
                'uses' => 'Rivile\\HCRivileClientsController@apiList',
            ]);
            Route::get('{timestamp}', [
                'as' => 'api.v1.routes.rivile.clients.list.update',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list'],
                'uses' => 'Rivile\\HCRivileClientsController@apiIndexSync',
            ]);
        });

        Route::post('restore', [
            'as' => 'api.v1.routes.rivile.clients.restore',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_update'],
            'uses' => 'Rivile\\HCRivileClientsController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.clients.merge',
            'middleware' => [
                'acl-apps:interactivesolutions_rivile_routes_rivile_clients_create',
                'acl-apps:interactivesolutions_rivile_routes_rivile_clients_delete',
            ],
            'uses' => 'Rivile\\HCRivileClientsController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'api.v1.routes.rivile.clients.force',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_force_delete'],
            'uses' => 'Rivile\\HCRivileClientsController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.clients.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list'],
                'uses' => 'Rivile\\HCRivileClientsController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_update'],
                'uses' => 'Rivile\\HCRivileClientsController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_delete'],
                'uses' => 'Rivile\\HCRivileClientsController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'api.v1.routes.rivile.clients.update.strict',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_update'],
                'uses' => 'Rivile\\HCRivileClientsController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'api.v1.routes.rivile.clients.duplicate.single',
                'middleware' => [
                    'acl-apps:interactivesolutions_rivile_routes_rivile_clients_list',
                    'acl-apps:interactivesolutions_rivile_routes_rivile_clients_create',
                ],
                'uses' => 'Rivile\\HCRivileClientsController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'api.v1.routes.rivile.clients.force.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_force_delete'],
                'uses' => 'Rivile\\HCRivileClientsController@apiForceDelete',
            ]);
        });
    });
});


//interactivesolutions/rivile/src/Routes/Api/02_routes.rivile.products.php


Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function() {
    Route::group(['prefix' => 'v1/rivile/products'], function() {
        Route::get('/', [
            'as' => 'api.v1.routes.rivile.products',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list'],
            'uses' => 'Rivile\\HCRivileProductsController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_create'],
            'uses' => 'Rivile\\HCRivileProductsController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_delete'],
            'uses' => 'Rivile\\HCRivileProductsController@apiDestroy',
        ]);

        Route::group(['prefix' => 'list'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.products.list',
                'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_products_list'],
                'uses' => 'Rivile\\HCRivileProductsController@apiList',
            ]);
            Route::get('{timestamp}', [
                'as' => 'api.v1.routes.rivile.products.list.update',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list'],
                'uses' => 'Rivile\\HCRivileProductsController@apiIndexSync',
            ]);
        });

        Route::post('restore', [
            'as' => 'api.v1.routes.rivile.products.restore',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_update'],
            'uses' => 'Rivile\\HCRivileProductsController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.products.merge',
            'middleware' => [
                'acl-apps:interactivesolutions_rivile_routes_rivile_products_create',
                'acl-apps:interactivesolutions_rivile_routes_rivile_products_delete',
            ],
            'uses' => 'Rivile\\HCRivileProductsController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'api.v1.routes.rivile.products.force',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_force_delete'],
            'uses' => 'Rivile\\HCRivileProductsController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.products.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list'],
                'uses' => 'Rivile\\HCRivileProductsController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_update'],
                'uses' => 'Rivile\\HCRivileProductsController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_delete'],
                'uses' => 'Rivile\\HCRivileProductsController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'api.v1.routes.rivile.products.update.strict',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_update'],
                'uses' => 'Rivile\\HCRivileProductsController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'api.v1.routes.rivile.products.duplicate.single',
                'middleware' => [
                    'acl-apps:interactivesolutions_rivile_routes_rivile_products_list',
                    'acl-apps:interactivesolutions_rivile_routes_rivile_products_create',
                ],
                'uses' => 'Rivile\\HCRivileProductsController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'api.v1.routes.rivile.products.force.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_force_delete'],
                'uses' => 'Rivile\\HCRivileProductsController@apiForceDelete',
            ]);
        });
    });
});


//interactivesolutions/rivile/src/Routes/Api/03_routes.rivile.payments.php


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


//interactivesolutions/rivile/src/Routes/Api/04_routes.rivile.dept.php


Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function() {
    Route::group(['prefix' => 'v1/rivile/dept'], function() {
        Route::get('/', [
            'as' => 'api.v1.routes.rivile.dept',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_list'],
            'uses' => 'Rivile\\HCRivileDeptController@apiIndexPaginate',
        ]);
        Route::post('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_create'],
            'uses' => 'Rivile\\HCRivileDeptController@apiStore',
        ]);
        Route::delete('/', [
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_delete'],
            'uses' => 'Rivile\\HCRivileDeptController@apiDestroy',
        ]);

        Route::group(['prefix' => 'list'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.dept.list',
                'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_dept_list'],
                'uses' => 'Rivile\\HCRivileDeptController@apiList',
            ]);
            Route::get('{timestamp}', [
                'as' => 'api.v1.routes.rivile.dept.list.update',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_list'],
                'uses' => 'Rivile\\HCRivileDeptController@apiIndexSync',
            ]);
        });

        Route::post('restore', [
            'as' => 'api.v1.routes.rivile.dept.restore',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_update'],
            'uses' => 'Rivile\\HCRivileDeptController@apiRestore',
        ]);
        Route::post('merge', [
            'as' => 'api.v1.routes.rivile.dept.merge',
            'middleware' => [
                'acl-apps:interactivesolutions_rivile_routes_rivile_dept_create',
                'acl-apps:interactivesolutions_rivile_routes_rivile_dept_delete',
            ],
            'uses' => 'Rivile\\HCRivileDeptController@apiMerge',
        ]);
        Route::delete('force', [
            'as' => 'api.v1.routes.rivile.dept.force',
            'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_force_delete'],
            'uses' => 'Rivile\\HCRivileDeptController@apiForceDelete',
        ]);

        Route::group(['prefix' => '{id}'], function() {
            Route::get('/', [
                'as' => 'api.v1.routes.rivile.dept.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_list'],
                'uses' => 'Rivile\\HCRivileDeptController@apiShow',
            ]);
            Route::put('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_update'],
                'uses' => 'Rivile\\HCRivileDeptController@apiUpdate',
            ]);
            Route::delete('/', [
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_delete'],
                'uses' => 'Rivile\\HCRivileDeptController@apiDestroy',
            ]);

            Route::put('strict', [
                'as' => 'api.v1.routes.rivile.dept.update.strict',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_update'],
                'uses' => 'Rivile\\HCRivileDeptController@apiUpdateStrict',
            ]);
            Route::post('duplicate', [
                'as' => 'api.v1.routes.rivile.dept.duplicate.single',
                'middleware' => [
                    'acl-apps:interactivesolutions_rivile_routes_rivile_dept_list',
                    'acl-apps:interactivesolutions_rivile_routes_rivile_dept_create',
                ],
                'uses' => 'Rivile\\HCRivileDeptController@apiDuplicate',
            ]);
            Route::delete('force', [
                'as' => 'api.v1.routes.rivile.dept.force.single',
                'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_dept_force_delete'],
                'uses' => 'Rivile\\HCRivileDeptController@apiForceDelete',
            ]);
        });
    });
});

