<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Team
    Route::apiResource('teams', 'TeamApiController');

    // Product Category
    Route::post('product-categories/media', 'ProductCategoryApiController@storeMedia')->name('product-categories.storeMedia');
    Route::apiResource('product-categories', 'ProductCategoryApiController');

    // Crm Status
    Route::apiResource('crm-statuses', 'CrmStatusApiController');

    // Crm Customer
    Route::apiResource('crm-customers', 'CrmCustomerApiController');

    // Crm Note
    Route::post('crm-notes/media', 'CrmNoteApiController@storeMedia')->name('crm-notes.storeMedia');
    Route::apiResource('crm-notes', 'CrmNoteApiController');

    // Crm Document
    Route::post('crm-documents/media', 'CrmDocumentApiController@storeMedia')->name('crm-documents.storeMedia');
    Route::apiResource('crm-documents', 'CrmDocumentApiController');

    // Team Users
    Route::apiResource('team-users', 'TeamUsersApiController');

    // Team Roles
    Route::apiResource('team-roles', 'TeamRolesApiController');

    // Teams Permisions
    Route::apiResource('teams-permisions', 'TeamsPermisionsApiController');

    // Clients
    Route::apiResource('clients', 'ClientsApiController');

    // Companies
    Route::apiResource('companies', 'CompaniesApiController');
});
