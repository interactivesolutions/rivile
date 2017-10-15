<?php

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