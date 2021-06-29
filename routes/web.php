<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\WebController@index')->name('index');
Route::get('/desafio1', 'App\Http\Controllers\Desafio1Controller@index')->name('desafio1');
Route::get('/desafio2', 'App\Http\Controllers\BibliotecaController@index')->name('desafio2');
Route::post('/desafio2', 'App\Http\Controllers\BibliotecaController@emprestar')->name('desafio2.post');
Route::get('/desafio3', 'App\Http\Controllers\WebController@desafio3')->name('desafio3');
Route::get('/desafio4', 'App\Http\Controllers\Desafio4Controller@index')->name('desafio4');
Route::post('/desafio4', 'App\Http\Controllers\Desafio4Controller@pega')->name('desafio4.post');
