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
}); 

Route::group(['namespace' => 'Web'] , function () {
	Route::resource('contact' , 'ContactController', ['only' => ['index' , 'store']] );
});
