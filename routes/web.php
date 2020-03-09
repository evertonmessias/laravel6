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
/*
Route::middleware(['auth'])->group(function(){
    Route::get('lista', 'AgendaController@lista');
    Route::get('criar', 'AgendaController@criar');
    Route::post('agenda','AgendaController@store');
    Route::get('contato','AgendaController@contato');
    Route::get('show/{agenda}', 'AgendaController@show');
    Route::get('show/{agenda}/edit', 'AgendaController@edit');
    Route::get('show/{agenda}/del', 'AgendaController@del');
    Route::put('update/{agenda}', 'AgendaController@update');
    Route::delete('destroy/{agenda}', 'AgendaController@destroy');
    Route::get('/home', 'HomeController@index');
    Route::get('show/{agenda}/anotacao', 'AgendaController@anotacao');
    Route::put('envio/{agenda}', 'AnotacaoController@envio');
});
Auth::routes();
*/
