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

Route::get('/', function () {return view('home');});
Route::get('pessoas/lista', 'PessoasController@lista');
Route::get('pessoas/criar', 'PessoasController@criar');
Route::post('pessoas','PessoasController@store');
Route::get('pessoas/contato','PessoasController@contato');
Route::get('pessoas/show/{pessoas}', 'PessoasController@show');
Route::get('pessoas/show/{pessoas}/edit', 'PessoasController@edit');
Route::get('pessoas/show/{pessoas}/del', 'PessoasController@del');
Route::put('update/{pessoas}', 'PessoasController@update');
Route::delete('destroy/{pessoas}', 'PessoasController@destroy');
