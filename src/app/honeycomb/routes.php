<?php

//src/app/routes//admin/01_routes.rivile.clients.php


Route::group(['prefix' => config('hc.admin_url'), 'middleware' => ['web', 'auth']], function ()
{
    Route::get('rivile/clients', ['as' => 'admin.routes.rivile.clients.index', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@adminIndex']);

    Route::group(['prefix' => 'api/rivile/clients'], function ()
    {
        Route::get('/', ['as' => 'admin.api.routes.rivile.clients', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiIndexPaginate']);
        Route::post('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_create'], 'uses' => 'rivile\\HCRivileClientsController@apiStore']);
        Route::delete('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiDestroy']);

        Route::get('list', ['as' => 'admin.api.routes.rivile.clients.list', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiIndex']);
        Route::post('restore', ['as' => 'admin.api.routes.rivile.clients.restore', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_update'], 'uses' => 'rivile\\HCRivileClientsController@apiRestore']);
        Route::post('merge', ['as' => 'api.v1.routes.rivile.clients.merge', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_create', 'acl:interactivesolutions_rivile_routes_rivile_clients_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiMerge']);
        Route::delete('force', ['as' => 'admin.api.routes.rivile.clients.force', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_force_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiForceDelete']);

        Route::group(['prefix' => '{id}'], function ()
        {
            Route::get('/', ['as' => 'admin.api.routes.rivile.clients.single', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiShow']);
            Route::put('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_update'], 'uses' => 'rivile\\HCRivileClientsController@apiUpdate']);
            Route::delete('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiDestroy']);

            Route::put('strict', ['as' => 'admin.api.routes.rivile.clients.update.strict', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_update'], 'uses' => 'rivile\\HCRivileClientsController@apiUpdateStrict']);
            Route::post('duplicate', ['as' => 'admin.api.routes.rivile.clients.duplicate.single', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_list', 'acl:interactivesolutions_rivile_routes_rivile_clients_create'], 'uses' => 'rivile\\HCRivileClientsController@apiDuplicate']);
            Route::delete('force', ['as' => 'admin.api.routes.rivile.clients.force.single', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_clients_force_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiForceDelete']);
        });
    });
});


//src/app/routes//admin/02_routes.rivile.products.php


Route::group(['prefix' => config('hc.admin_url'), 'middleware' => ['web', 'auth']], function ()
{
    Route::get('rivile/products', ['as' => 'admin.routes.rivile.products.index', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@adminIndex']);

    Route::group(['prefix' => 'api/rivile/products'], function ()
    {
        Route::get('/', ['as' => 'admin.api.routes.rivile.products', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiIndexPaginate']);
        Route::post('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_create'], 'uses' => 'rivile\\HCRivileProductsController@apiStore']);
        Route::delete('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiDestroy']);

        Route::get('list', ['as' => 'admin.api.routes.rivile.products.list', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiIndex']);
        Route::post('restore', ['as' => 'admin.api.routes.rivile.products.restore', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_update'], 'uses' => 'rivile\\HCRivileProductsController@apiRestore']);
        Route::post('merge', ['as' => 'api.v1.routes.rivile.products.merge', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_create', 'acl:interactivesolutions_rivile_routes_rivile_products_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiMerge']);
        Route::delete('force', ['as' => 'admin.api.routes.rivile.products.force', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_force_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiForceDelete']);

        Route::group(['prefix' => '{id}'], function ()
        {
            Route::get('/', ['as' => 'admin.api.routes.rivile.products.single', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiShow']);
            Route::put('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_update'], 'uses' => 'rivile\\HCRivileProductsController@apiUpdate']);
            Route::delete('/', ['middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiDestroy']);

            Route::put('strict', ['as' => 'admin.api.routes.rivile.products.update.strict', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_update'], 'uses' => 'rivile\\HCRivileProductsController@apiUpdateStrict']);
            Route::post('duplicate', ['as' => 'admin.api.routes.rivile.products.duplicate.single', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_list', 'acl:interactivesolutions_rivile_routes_rivile_products_create'], 'uses' => 'rivile\\HCRivileProductsController@apiDuplicate']);
            Route::delete('force', ['as' => 'admin.api.routes.rivile.products.force.single', 'middleware' => ['acl:interactivesolutions_rivile_routes_rivile_products_force_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiForceDelete']);
        });
    });
});


//src/app/routes//api/01_routes.rivile.clients.php


Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function ()
{
    Route::group(['prefix' => 'v1/rivile/clients'], function ()
    {
        Route::get('/', ['as' => 'api.v1.routes.rivile.clients', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiIndexPaginate']);
        Route::post('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_create'], 'uses' => 'rivile\\HCRivileClientsController@apiStore']);
        Route::delete('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiDestroy']);

        Route::group(['prefix' => 'list'], function ()
        {
            Route::get('/', ['as' => 'api.v1.routes.rivile.clients.list', 'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiList']);
            Route::get('{timestamp}', ['as' => 'api.v1.routes.rivile.clients.list.update', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiIndexSync']);
        });

        Route::post('restore', ['as' => 'api.v1.routes.rivile.clients.restore', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_update'], 'uses' => 'rivile\\HCRivileClientsController@apiRestore']);
        Route::post('merge', ['as' => 'api.v1.routes.rivile.clients.merge', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_create', 'acl-apps:interactivesolutions_rivile_routes_rivile_clients_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiMerge']);
        Route::delete('force', ['as' => 'api.v1.routes.rivile.clients.force', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_force_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiForceDelete']);

        Route::group(['prefix' => '{id}'], function ()
        {
            Route::get('/', ['as' => 'api.v1.routes.rivile.clients.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list'], 'uses' => 'rivile\\HCRivileClientsController@apiShow']);
            Route::put('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_update'], 'uses' => 'rivile\\HCRivileClientsController@apiUpdate']);
            Route::delete('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiDestroy']);

            Route::put('strict', ['as' => 'api.v1.routes.rivile.clients.update.strict', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_update'], 'uses' => 'rivile\\HCRivileClientsController@apiUpdateStrict']);
            Route::post('duplicate', ['as' => 'api.v1.routes.rivile.clients.duplicate.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_list', 'acl-apps:interactivesolutions_rivile_routes_rivile_clients_create'], 'uses' => 'rivile\\HCRivileClientsController@apiDuplicate']);
            Route::delete('force', ['as' => 'api.v1.routes.rivile.clients.force.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_clients_force_delete'], 'uses' => 'rivile\\HCRivileClientsController@apiForceDelete']);
        });
    });
});

//src/app/routes//api/02_routes.rivile.products.php


Route::group(['prefix' => 'api', 'middleware' => ['auth-apps']], function ()
{
    Route::group(['prefix' => 'v1/rivile/products'], function ()
    {
        Route::get('/', ['as' => 'api.v1.routes.rivile.products', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiIndexPaginate']);
        Route::post('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_create'], 'uses' => 'rivile\\HCRivileProductsController@apiStore']);
        Route::delete('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiDestroy']);

        Route::group(['prefix' => 'list'], function ()
        {
            Route::get('/', ['as' => 'api.v1.routes.rivile.products.list', 'middleware' => ['acl-apps:api_v1_interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiList']);
            Route::get('{timestamp}', ['as' => 'api.v1.routes.rivile.products.list.update', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiIndexSync']);
        });

        Route::post('restore', ['as' => 'api.v1.routes.rivile.products.restore', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_update'], 'uses' => 'rivile\\HCRivileProductsController@apiRestore']);
        Route::post('merge', ['as' => 'api.v1.routes.rivile.products.merge', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_create', 'acl-apps:interactivesolutions_rivile_routes_rivile_products_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiMerge']);
        Route::delete('force', ['as' => 'api.v1.routes.rivile.products.force', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_force_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiForceDelete']);

        Route::group(['prefix' => '{id}'], function ()
        {
            Route::get('/', ['as' => 'api.v1.routes.rivile.products.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list'], 'uses' => 'rivile\\HCRivileProductsController@apiShow']);
            Route::put('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_update'], 'uses' => 'rivile\\HCRivileProductsController@apiUpdate']);
            Route::delete('/', ['middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiDestroy']);

            Route::put('strict', ['as' => 'api.v1.routes.rivile.products.update.strict', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_update'], 'uses' => 'rivile\\HCRivileProductsController@apiUpdateStrict']);
            Route::post('duplicate', ['as' => 'api.v1.routes.rivile.products.duplicate.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_list', 'acl-apps:interactivesolutions_rivile_routes_rivile_products_create'], 'uses' => 'rivile\\HCRivileProductsController@apiDuplicate']);
            Route::delete('force', ['as' => 'api.v1.routes.rivile.products.force.single', 'middleware' => ['acl-apps:interactivesolutions_rivile_routes_rivile_products_force_delete'], 'uses' => 'rivile\\HCRivileProductsController@apiForceDelete']);
        });
    });
});
