<?php

/*
|--------------------------------------------------------------------------
| 								ADMIN Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::any('/dropzone', 'General\DropzoneController@upload')->name('dropzone');

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin' , 'middleware' => ['auth' , 'admin'] ], function() {

	Route::get('/panel', function () {
	    return view('default.panel');
	});

	Route::resource('categories' , 'CategoryController');
	Route::resource('galleries' , 'GalleryController');

});




