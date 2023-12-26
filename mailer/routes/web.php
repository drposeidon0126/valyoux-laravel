<?php


Route::redirect('/', '/admin');
Auth::routes(['register' => false]);

// Route::get('/', 'HomeController@index')->name('home');
Route::get('categories/check_slug', 'CategoryController@check_slug')->name('categories.check_slug');
Route::get('categories/{slug}/{category}', 'CategoryController@show')->name('categories.show');
Route::get('tags/check_slug', 'TagController@check_slug')->name('tags.check_slug');
Route::get('tags/{slug}/{tag}', 'TagController@show')->name('tags.show');
Route::get('articles/check_slug', 'ArticleController@check_slug')->name('articles.check_slug');
Route::get('articles/{slug}/{article}', 'ArticleController@show')->name('articles.show');
Route::get('articles', 'ArticleController@index')->name('articles.index');
Route::get('faq', 'FaqController@index')->name('faq.index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('my-mailer', 'HomeController@send_email')->name('send_email');
    Route::post('check-smtp', 'HomeController@check_smtp')->name('check_smtp');
    Route::post('attachments-upload', 'HomeController@attachments_upload')->name('attachments_upload');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
});
