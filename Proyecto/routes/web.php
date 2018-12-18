<?php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('Comentario','ComentarioController');
Route::get('Comentario.index/{idB}', ['as' => 'Comentario.index', 'uses' => 'ComentarioController@index']);
Auth::routes();






Route::get('Bitacora/show/{titulo}','BitacoraController@evaluar');
Route::resource('Bitacora','BitacoraController');
Route::get('index', 'Registro_tutorController@regis');
Route::get('edit/{id}','BitacoraController@show');
Route::get('edit/{id}','BitacoraController@edit');
Route::post('edit/{titulo}','BitacoraController@update');
Route::delete('{id}','BitacoraController@destroy');
Route::get('/all', 'BitacoraController@index');
Auth::routes();


Route::resource('informacion','InformacionController');
Route::get('edit/{id}','informacionController@create');
Route::get('','informacionController@create');

Route::get('informacion.edit/{idI}', ['as' => 'informacion.edit', 'uses' => 'InformacionController@edit']);

Auth::routes();









