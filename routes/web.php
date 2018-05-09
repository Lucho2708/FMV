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

Route::get('/dashboard', function () {
    return view('admin.inicio');
})->middleware('auth');
Route::get('/hv', function () {
    return view('formularios/hv');
})->middleware('auth');
Route::get('/formulario/acudiente', function () {
    return view('formularios/acudiente');
})->middleware('auth');
Route::get('/diario', function () {
    return view('formularios/diario');
})->middleware('auth');
Route::get('/hc', function () {
    return view('formularios/hc');
})->middleware('auth');
Route::get('/sproceso', function () {
    return view('formularios/sproceso');
})->middleware('auth');
Route::get('/cproceso', function () {
    return view('formularios/cproceso');
})->middleware('auth');
Route::get('/rpsicologica', function () {
    return view('formularios/rpsicologica');
})->middleware('auth');
Route::get('/hingreso', function () {
    return view('formularios/hingreso');
})->middleware('auth');
Route::get('/eingreso', function () {
    return view('formularios/eingreso');
})->middleware('auth');

Route::get('/eegreso', function () {
    return view('formularios/eegreso');
})->middleware('auth');

Route::get('/prueba', function () {
    return view('formulario/hv');
})->middleware('auth');

Route::get('/encuesta', function () {
    return view('/encuestaeto');
})->middleware('auth');

Route::get('/eto', function () {
    return view('/tocupacional');
})->middleware('auth');

Route::group([],function(){
    Route::resource('usuario','UserController')->middleware('auth');
});

Route::group([],function(){
    Route::resource('paciente','PacienteController')->middleware('auth');
});


Route::group([],function(){
    Route::resource('hoja-vida','HvController')->middleware('auth');
});

Route::group([],function(){
    Route::resource('acudiente','AcudienteController')->middleware('auth');
});

Route::get('/','PrincipalController@index');

//Login

Route::get('/login', function(){
    return view('auth.login');
});

Route::post('login','Auth\LoginController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('perfil', 'UserController@perfil')->name('perfil')->middleware('auth');
Route::post('perfil', 'UserController@update_avatar')->name('perfil')->middleware('auth');