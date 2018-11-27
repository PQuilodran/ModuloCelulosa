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

//Route::get('Cursos', 'CursosController@Cursos');
//Route::get('Comentarios', 'ComentariosController@Comentarios');
Auth::routes();

Route::resource('Bitacora','BitacoraController');
//Route::resource('Bitacora','BitacoraController');

//Route::get('index', 'Registro_tutorController@regis');

//Route::delete('{id}','BitacoraController@destroy');