<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
<<<<<<< HEAD
*/

Route::get('/','procatalogo@index');
//Route::get('iniciarsesion','procatalogo@iniciarsesion');

//Route::when('*','csrf',['post']);
//rutas para CRUD categorias
Route::get('categoria/crear/{nombre}','CategoriaControlador@create');
Route::get('categoria/modificar/{id}/{categoria}','CategoriaControlador@update');
Route::get('categoria/eliminar/{id}','CategoriaControlador@destroy');
//rutas para CRUD presentaciones
Route::get('presentacion/crear/{nombre}','PresentacionControlador@create');
Route::get('presentacion/modificar/{id}/{presentacion}','PresentacionControlador@update');
Route::get('presentacion/eliminar/{id}','PresentacionControlador@destroy');
//Route::get('producto/crear/{nombre}','ProductoControlador@create');

Route::resource('producto/crear','ProductoControlador');
//ruta usuario
//Route::get('usuario/crear','UsuarioControlador@create');

//ruta producto


=======

Route::resource('categoria','CategoriaControlador');*/
Route::get('/','procatalogo@index');
<<<<<<< HEAD
//Route::get('iniciarsesion','procatalogo@iniciarsesion');
//rutas para CRUD categorias
Route::get('categoria/crear/{nombre}','CategoriaControlador@create');
Route::get('categoria/ver/{nombre}','CategoriaControlador@show');
Route::get('categoria/modificar/{id}/{categoria}','CategoriaControlador@update');
Route::get('categoria/eliminar/{id}','CategoriaControlador@destroy');

//rutas para CRUD presentaciones
Route::get('presentacion/crear/{nombre}','PresentacionControlador@create');
Route::get('presentacion/ver/{nombre}','PresentacionControlador@show');
Route::get('presentacion/modificar/{id}/{presentacion}','PresentacionControlador@update');
Route::get('presentacion/eliminar/{id}','PresentacionControlador@destroy');

//ruta usuario
Route::get('usuario/crear','UsuarioControlador@create');
Route::get('usuario/ver/{us}','UsuarioControlador@show');

//ruta producto
Route::get('producto/crear','ProductoControlador@create');
Route::get('producto/ver/{nombre}','ProductoControlador@show');
>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c

//una nueva ruta para eliminar registros con el metodo get
//Route::get('movie/destroy/{id}', ['as' => 'movie/destroy', 'uses'=>'MovieController@destroy']);
//ruta para realizar busqueda de registros.
<<<<<<< HEAD
//Route::post('movie/search', ['as' => 'movie/search', 'uses'=>'MovieController@search']);
=======
//Route::post('movie/search', ['as' => 'movie/search', 'uses'=>'MovieController@search']);
=======
Route::get('iniciarsesion','procatalogo@iniciarsesion');
Route::get('procatalogo','iniciarsesion@procatalogo');
>>>>>>> 5d7bf70c2d135ff127e5bcaec13881025a3b1d1e
>>>>>>> cc3e2ad40d98275b77185e7668d458508d2f5e6c
