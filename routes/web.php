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
//Poner las acciones definidas por el programador antes del CRUD por defecto que monta Laravel
Route::delete('especialidads/destroyAll', 'EspecialidadController@destroyAll')->name('especialidads.destroyAll');
Route::resource('especialidads', 'EspecialidadController');
Route::resource('medicos', 'MedicoController');
Route::resource('pacientes', 'PacienteController');
Route::resource('citas', 'CitaController');
Route::resource('enfermedads', 'EnfermedadController');
Route::resource('localizacions', 'LocalizacionController');




Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('medicos/create',"MedicoController@create")->name("medicos.create");