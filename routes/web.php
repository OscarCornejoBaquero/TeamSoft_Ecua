<?php

use Illuminate\Support\Facades\Route;

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
Route::get('Home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('Nosotros', 'NosotrosController@index');
Route::get('Servicios','ServiciosController@index');
Route::get('Magis', 'MagisController@index');
Route::get('Contactos', 'ContactosController@index');
Route::get('Login', 'LoginController@index')->name('login')->middleware('guest');
Route::get('Dashboard', 'DashboardController@index')->middleware('auth');
Route::post('Login', 'LoginController@loginUser');
