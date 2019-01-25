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


Auth::routes();

Route::get('/', 'landing\\HomeController@index')->name('index.landing');
Route::get('/doacoes', 'landing\\DoacoesController@index')->name('doacoes.landing');
Route::get('/parceiros', 'landing\\ParceirosController@index')->name('parceiros.landing');
Route::get('/album', 'landing\\AlbumController@index')->name('album.landing');
Route::get('/projetos', 'landing\\ProjetosController@index')->name('projetos.landing');


Route::get('/quem-somos', function(){
    return view('landing.sobre');
})->name('quem-somos.landing');



Route::prefix('admin')->group(function(){
    Route::get('/', 'admin\\DashController@index')->name('index.admin');
});