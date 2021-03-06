<?php

Route::get('/', 'TestController@welcome');
Route::get('/products/store', 'StoreController@store');

Auth::routes();

Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/categories/{category}', 'CategoryController@show');

Route::post('/cart', 'CartDetailController@store');
Route::delete('/cart', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');

//Rutas de contactanos y about
Route::get('/contactus', 'ContactController@contact');
Route::get('/about', 'AboutController@about');

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')
->group(function () {
	Route::get('/products', 'ProductController@index'); // listado
	Route::get('/products/create', 'ProductController@create'); // formulario
	Route::post('/products', 'ProductController@store'); // registrar
	Route::get('/products/{id}/edit', 'ProductController@edit'); // formulario edición
	Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar
	Route::delete('/products/{id}', 'ProductController@destroy'); // form eliminar

	Route::get('/products/{id}/images', 'ImageController@index'); // listado
	Route::post('/products/{id}/images', 'ImageController@store'); // registrar
	Route::delete('/products/{id}/images', 'ImageController@destroy'); // form eliminar	
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar

	Route::get('/categories', 'CategoryController@index'); // listado
	Route::get('/categories/create', 'CategoryController@create'); // formulario
	Route::post('/categories', 'CategoryController@store'); // registrar
	Route::get('/categories/{category}/edit', 'CategoryController@edit'); // formulario edición
	Route::post('/categories/{category}/edit', 'CategoryController@update'); // actualizar
	Route::delete('/categories/{id}', 'CategoryController@destroy'); // form eliminar

    //CRUD USUARIOS-LOS NOMBRES QUE USAMOS SON UNA CONVENCIÓN
	Route::get('/users', 'UserController@index'); // listado
	Route::get('/users/create', 'UserController@create'); // formulario
	Route::post('/users', 'UserController@store'); // registrar
	Route::get('/users/{category}/edit', 'UserController@edit'); // formulario edición
	Route::post('/users/{category}/edit', 'UserController@update'); // actualizar
	Route::delete('/users/{id}', 'UserController@destroy'); // form eliminar
});
