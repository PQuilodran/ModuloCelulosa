<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/comentarios', function () {
    return view('Bitacora.comentario');
});


Route::resource('Bitacora','BitacoraController');

Route::get('index', 'Registro_tutorController@regis');

Route::get('edit/{id}','BitacoraController@show');
Route::get('edit/{id}','BitacoraController@edit');
Route::post('edit/{titulo}','BitacoraController@update');
Route::delete('{id}','BitacoraController@destroy');