<?php

/*
|--------------------------------------------------------------------------
| 								ADMIN Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::any('/dropzone', 'General\DropzoneController@upload')->name('dropzone');

Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'], function(){

	Route::get('/panel', function () {
	    return view('admin.panel');
	});

	Route::resource('galleries' , 'GalleryController');

});




