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
    return view('principal');
});


Route::get('/empleadas', function () {
    return view('empleadas');
});

Route::get('/mensajeria', function () {
    return view('mensajeria');
});


Route::get('empleadas', function () {
    return view('empleadas');
});



Route::post('factura','HorarioController@save')->name('guardar.horario');
Route::post('cotizar/{id}','HorarioController@calcular')->name('calcular.show');
Route::get('cotizar/{id}','HorarioController@show')->name('cotizar.show');
Route::get('mensajeria/{id}','MessagesController@show')->name('ms.show');
Route::get('mensajeria/{id}/destroy','MessagesController@destroy')->name('message.del');
Route::get('perfil/{id}', 'EmpleadaController@show')->name('perfil.show');
Route::post('housekeepers', 'MessagesController@create')->name('message.save');
Route::get('housekeepers/{id}', 'EmpleadaController@showProfile')->name('housekeepers.show');
Route::get('vista', 'EmpleadaController@selectAll');
Route::post('perfil/{id}', 'EmpleadaController@update_avatar')->name('perfil.update');
Route::post('housekeepers/comentario', 'ComentarioController@create')->name('comentario.save');
Route::get('housekeepers/comentario/delete/{id}', 'ComentarioController@destroy')->name('comentario.delete');
Route::get('empleada/delete/{id}', 'EmpleadaController@destroy')->name('cuenta.delete');



Auth::routes();

Route::post('empleadas','EmpleadaController@search');
Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('empleada', 'EmpleadaController');
//Route::resource('comentario','ComentarioController');
