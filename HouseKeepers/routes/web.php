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

Route::get('cotizar', function () {
    return view('cotizar');
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



Route::get('perfil/{id}', 'EmpleadaController@show')->name('perfil.show');
Route::get('housekeepers/{id}', 'EmpleadaController@showProfile')->name('housekeepers.show');

Route::get('vista', 'EmpleadaController@selectAll');
Route::post('perfil/{id}', 'EmpleadaController@update_avatar')->name('perfil.update');

Route::get('/cotizar', function () {
    return view('cotizar');
});


Auth::routes();

Route::post('empleadas','EmpleadaController@search');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('empleada', 'EmpleadaController');
Route::resource('comentario','ComentarioController');
