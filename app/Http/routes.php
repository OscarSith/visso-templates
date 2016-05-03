<?php
Route::group(['middleware' => ['web', 'guest'], 'prefix' => 'admin'], function($route) {

	$route->get('login', 'Auth\AuthController@showLoginForm');
	$route->post('login', 'Auth\AuthController@login')->name('login');

});

Route::group(['middleware' => 'web', 'prefix' => 'admin'], function () {

	$this->get('/', 'HomeController@index')->name('dashboard');
	$this->get('aresline', 'HomeController@aresline')->name('aresline');
	$this->get('quadrifoglio', 'HomeController@quadrifoglio')->name('quadrifoglio');
	$this->get('visso', 'HomeController@visso')->name('visso');

	$this->get('logout', 'Auth\AuthController@logout')->name('logout');
});

Route::group(['middleware' => ['web']], function () {
	// Otras paginas
	Route::get('/', 'WelcomeController@index')->name('home');
	Route::get('nosotros', 'WelcomeController@nosotros')->name('about-us');
	Route::get('proyectos', 'WelcomeController@proyectos')->name('proyectos');
	Route::get('proyectos/{id}-{nombre_proyecto}', 'WelcomeController@proyectDetail')->name('proyectDetail');
	Route::get('contacto', 'WelcomeController@contacto')->name('contacto');
	Route::post('send-mail', 'WelcomeController@sendMailContact')->name('sendMailContact');
	Route::post('add-newsletter', 'WelcomeController@newsletter')->name('newsletter');

	// Marca
	Route::get('{marca}', 'CategoriaController@index')->name('categorias');
	Route::get('{marca}/{cat_name}', 'CategoriaController@index2')->name('catByProduct');
	Route::get('{marca}/{cat_name}/{cat_parent}-{sub_cat_name}', 'CategoriaController@index3')->name('catBySubCatID');

	// Detalle del producto
	Route::get('{marca}/detalle/{id}/{producto}', 'ProductoController@detalleProductoSimple')->name('detalleProductoSimple');
	Route::get('{marca}/{cat_name}/detalle/{id}/{producto}', 'ProductoController@detalleProducto')->name('detalleProducto');
	Route::get('{marca}/{cat_name}/{cat_parent}-{sub_cat_name}/detalle/{id}/{producto}', 'ProductoController@detalleProductoSub')->name('detalleProductoSub');

});
