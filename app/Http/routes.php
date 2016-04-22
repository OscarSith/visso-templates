<?php
Route::group(['middleware' => ['web']], function () {
	// Otras paginas
	Route::get('/', 'WelcomeController@index')->name('home');
	Route::get('nosotros', 'WelcomeController@nosotros')->name('about-us');
	Route::get('contacto', 'WelcomeController@contacto')->name('contacto');
	Route::post('add-newsletter', 'WelcomeController@newsletter')->name('newsletter');

	// Marca
	Route::get('{marca}', 'CategoriaController@index')->name('categorias');

	// Detalle del producto
	Route::get('{marca}/{cat_name}/{id}-{producto}', 'ProductoController@detalleProducto')->name('detalleProducto');
	Route::get('{marca}/{cat_name}/{sub_cat_name}/{id}-{producto}', 'ProductoController@detalleProductoSub')->name('detalleProductoSub');

	// Categorias y subcategorias
	Route::get('{marca}/{cat_name}', 'ProductoController@index')->name('catByProduct');
	Route::get('{marca}/{cat_name}/{sub_cat_name}', 'ProductoController@indexSub')->name('catBySubCatID');
});

Route::group(['middleware' => ['web', 'guest'], 'prefix' => 'admin'], function($route) {

	$route->get('login', 'Auth\AuthController@showLoginForm');
	$route->post('login', 'Auth\AuthController@login')->name('login');

});

Route::group(['middleware' => 'web', 'prefix' => 'admin'], function () {

	$this->get('/', 'HomeController@index');

	$this->get('logout', 'Auth\AuthController@logout');
});
