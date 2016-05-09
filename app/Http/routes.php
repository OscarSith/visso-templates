<?php
Route::group(['middleware' => ['web', 'guest'], 'prefix' => 'admin'], function($route) {

	$route->get('login', 'Auth\AuthController@showLoginForm');
	$route->post('login', 'Auth\AuthController@login')->name('login');

});

Route::group(['middleware' => 'web', 'prefix' => 'admin'], function () {

	$this->get('/', 'HomeController@index')->name('dashboard');
	$this->get('marca/aresline', 'HomeController@aresline')->name('aresline');
	$this->get('marca/quadrifoglio', 'HomeController@quadrifoglio')->name('quadrifoglio');
	$this->get('marca/visso', 'HomeController@visso')->name('visso');

	// Cambiar imagen
	$this->post('update-cat-photo', 'CategoriaController@store')->name('changeImagen');
	$this->get('detalle-producto/{id}', 'ProductoController@show')->name('adminDetalleProducto');
	$this->put('update-producto/{id}', 'ProductoController@update')->name('adminUpdateProduct');
	$this->get('{marca}/sub-categoria/{cat_parent}', 'CategoriaController@show')->name('adminViewSubCat');
	$this->post('add-new-image-galery', 'ProductoController@store')->name('addNewImageGalery');
	$this->put('edit-image-galery/{id}', 'ProductoController@edit')->name('editImageGalery');
	$this->delete('delete-image-galery/{id}', 'ProductoController@destroy')->name('deleteImageGalery');

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
	Route::get('{marca}/{producto}/{id}', 'ProductoController@detalleProductoSimple')->name('detalleProductoSimple');
	Route::get('{marca}/{cat_name}/{id}/{producto}', 'ProductoController@detalleProducto')->name('detalleProducto');
	Route::get('{marca}/{cat_name}/{cat_parent}-{sub_cat_name}/{id}/{producto}', 'ProductoController@detalleProductoSub')->name('detalleProductoSub');

});
