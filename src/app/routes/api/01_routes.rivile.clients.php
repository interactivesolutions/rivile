<?php

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