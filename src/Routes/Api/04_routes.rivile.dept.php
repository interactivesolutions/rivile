<?php

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