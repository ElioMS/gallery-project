<?php


Auth::routes();

/*
|--------------------------------------------------------------------------
| 							AUTH ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/new-panel/' , function() {
	return view('default.metronic');
});

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

	Route::get('contact' , 'ContactController@index')->name('contact.index');
	Route::get('/export-contacts' , 'ContactController@export')->name('admin.export.contacts');

	Route::resource('news' , 'NewsController');
});




