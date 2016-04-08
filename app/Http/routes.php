<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('productos-{marca}', 'CategoriaController@index')->name('categorias');
Route::get('productos-{marca}/{cat_name}', 'ProductoController@index')->name('catByProduct');
// Route::get('productos/{cat_name}-{parent_cat_id}/{cat_name_sub}-{id}', 'ProductoController@index')->name('productsByCatID');
Route::get('productos-{marca}/{cat_name}/detalle-producto/{id}-{producto}', 'ProductoController@detalleProducto')->name('detalleProducto');
Route::get('contacto', function () {
    return view('contacto');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});