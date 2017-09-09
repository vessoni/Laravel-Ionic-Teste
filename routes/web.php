<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');


//Ajuste para rota de admin.
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth', 'as' => 'admin.'), function() {

    Route::resource('products', 'ProductsController');

});

