<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // User Type
    Route::post('user-types/media', 'UserTypeApiController@storeMedia')->name('user-types.storeMedia');
    Route::apiResource('user-types', 'UserTypeApiController');

    // All Students
    Route::post('all-students/media', 'AllStudentsApiController@storeMedia')->name('all-students.storeMedia');
    Route::apiResource('all-students', 'AllStudentsApiController');

    // All Parents
    Route::apiResource('all-parents', 'AllParentsApiController');
});
