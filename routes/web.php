<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


//---------------------Rutas para las recetas

// Vista Index de la aplicacion
Route::get('/recetas', 'RecetaController@index')->name('recetas.index');
//Vita Create una nueva receta
Route::get('/recetas/create', 'RecetaController@create')->name('recetas.create');




//Create una nueva receta
Route::post('/recetas','RecetaController@store')->name('recetas.store');





Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
