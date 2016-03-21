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
Route::get('productos', 'CategoriaController@index')->name('categorias');
Route::get('productos/{cat_name}-{id}', 'CategoriaController@subIndex')->name('catByProduct');
Route::get('productos/{cat_name}-{parent_cat_id}/{cat_name_sub}-{id}', 'ProductoController@index')->name('productsByCatID');
Route::get('detalle-producto', function () {
    return view('detalle-producto');
});
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
