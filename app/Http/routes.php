<?php
Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'WelcomeController@index')->name('home');
	Route::get('productos-{marca}', 'CategoriaController@index')->name('categorias');
	Route::get('productos-{marca}/{cat_name}', 'ProductoController@index')->name('catByProduct');
	// Route::get('productos/{cat_name}-{parent_cat_id}/{cat_name_sub}-{id}', 'ProductoController@index')->name('productsByCatID');
	Route::get('productos-{marca}/{cat_name}/detalle-producto/{id}-{producto}', 'ProductoController@detalleProducto')->name('detalleProducto');
	Route::get('contacto', 'WelcomeController@contacto')->name('contacto');
	Route::post('add-newsletter', 'WelcomeController@newsletter')->name('newsletter');
});

Route::group(['middleware' => ['web', 'guest'], 'prefix' => 'admin'], function($route) {

	$route->get('login', 'Auth\AuthController@showLoginForm');
	$route->post('login', 'Auth\AuthController@login')->name('login');

});

Route::group(['middleware' => 'web', 'prefix' => 'admin'], function () {

	$this->get('/', 'HomeController@index');

	$this->get('logout', 'Auth\AuthController@logout');
});
