<?php


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/comentarios', function () {
//    return view('Bitacora.comentario');
//});

Route::get('Bitacora/show/{titulo}','BitacoraController@evaluar');
Route::resource('Bitacora','BitacoraController');

Route::resource('Comentario','ComentarioController');
Route::get('Comentario.index/{idB}', ['as' => 'Comentario.index', 'uses' => 'ComentarioController@index']);
Auth::routes();

Route::get('index', 'Registro_tutorController@regis');

Route::get('edit/{id}','BitacoraController@show');
Route::get('edit/{id}','BitacoraController@edit');
Route::post('edit/{titulo}','BitacoraController@update');
Route::delete('{id}','BitacoraController@destroy');


Route::get('/all', 'BitacoraController@index');
