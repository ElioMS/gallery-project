<?php


Auth::routes();

/*
|--------------------------------------------------------------------------
| 							AUTH ADMIN ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function() {
	Route::get('/login' , 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login' , 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/panel', 'AdminController')->name('admin.panel');
});

/*
|--------------------------------------------------------------------------
| 								ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::any('/dropzone', 'General\DropzoneController@upload')->name('dropzone');

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => ['auth:admin'] ], function() {

	Route::resource('categories' , 'CategoryController');
	Route::resource('galleries' , 'GalleryController');

});




