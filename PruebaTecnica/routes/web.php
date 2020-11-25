<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
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



//Route::get('/home','ProfileController@index'); //ojo en laravel 8 no se aplica ningún 
//prefijo de espacio de nombres a los grupos de rutas en los que se cargan las rutas 

//consulta
Route::get('/consulta', 'App\Http\Controllers\ConsultaController@index')->name('consultas.index');


//perfiles
Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profiles.index');
Route::get('/profiles/create','App\Http\Controllers\ProfileController@create')->name('profiles.create');
Route::post('/profiles/','App\Http\Controllers\ProfileController@store')->name('profiles.store');
Route::get('/profiles/{profile}','App\Http\Controllers\ProfileController@show')->name('profiles.show');
Route::delete('/profiles/{profile}','App\Http\Controllers\ProfileController@destroy')->name('profiles.destroy');


//home

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('inicio');

//actividades
//Route::get('/activities', 'App\Http\Controllers\ActivityController@index')->name('activities.index');
Route::get('/activities','App\Http\Controllers\ActivityController@index')->name('activities.index');
Route::get('/activities/create','App\Http\Controllers\ActivityController@create')->name('activities.create');
Route::post('/activities/','App\Http\Controllers\ActivityController@store')->name('activities.store');
Route::get('/activities/{activity}','App\Http\Controllers\ActivityController@show')->name('activities.show');
Route::delete('/activities/{activity}','App\Http\Controllers\ActivityController@destroy')->name('activities.destroy');
Route::get('/activities/{activity}/edit','App\Http\Controllers\ActivityController@edit')->name('activities.edit');
Route::put('/activities/{activity}','App\Http\Controllers\ActivityController@update')->name('activities.update');


