<?php

/*
|--------------------------------------------------------------------------
| 									Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index');
Route::get('/' , function () {
	return view('web.home');
})->name('home'); 

Route::get('/vue/', function () {
	return view('vue');
});

Route::get('/some/{param}/', 'HomeController@randomRoute');

Route::get('/vue/components/', function () {
	return view('vue2');
});

Route::group(['namespace' => 'Web'] , function () {
	Route::resource('contact' , 'ContactController', ['only' => ['index' , 'store']] );
	Route::get('/gallery/{category}/{gallery?}/', 'GalleryController@index')->name('web.galleries.index');
});
