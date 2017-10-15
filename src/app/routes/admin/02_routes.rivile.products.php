<?php

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
