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

Route::get('/inicioadmin', function () {
    return view('admin.inicio');
});
Route::get('/hv', function () {
    return view('formularios/hv');
});
Route::get('/formulario/acudiente', function () {
    return view('formularios/acudiente');
});
Route::get('/diario', function () {
    return view('formularios/diario');
});
Route::get('/hc', function () {
    return view('formularios/hc');
});
Route::get('/sproceso', function () {
    return view('formularios/sproceso');
});
Route::get('/cproceso', function () {
    return view('formularios/cproceso');
});
Route::get('/rpsicologica', function () {
    return view('formularios/rpsicologica');
});
Route::get('/hingreso', function () {
    return view('formularios/hingreso');
});
Route::get('/eingreso', function () {
    return view('formularios/eingreso');
});

Route::get('/eegreso', function () {
    return view('formularios/eegreso');
});

Route::get('/prueba', function () {
    return view('formulario/hv');
});

//Route::get('/', function () {
//return view('inicio');

Route::get('/','PrincipalController@index');

Route::get('/encuesta', function () {
    return view('/encuestaeto');
});

Route::get('/eto', function () {
    return view('/tocupacional');
});

Route::get('/admin', function () {
    return view('admin.usuarios.crear-usuario');
});

Route::group([],function(){
    Route::resource('usuario','UserController');
});

Route::group([],function(){
    Route::resource('paciente','PacienteController');
});


Route::group([],function(){
    Route::resource('hoja-vida','HvController');
});

Route::group([],function(){
    Route::resource('acudiente','AcudienteController');
});


//Login

Route::get('/login', function(){
    return view('auth.login');
});

Route::post('login','Auth\LoginController@login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
