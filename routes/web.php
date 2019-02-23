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

Route::get('/', 'landing\\HomeController@landing')->name('index.landing');
Route::get('/doacoes', 'landing\\DoacoesController@landing')->name('doacoes.landing');
Route::get('/parceiros', 'landing\\ParceirosController@landing')->name('parceiros.landing');
Route::get('/album', 'landing\\AlbumController@landing')->name('album.landing');
Route::get('/projetos', 'landing\\ProjetosController@landing')->name('projetos.landing');


Route::get('/quemsomos', function(){
    return view('landing.sobre');
})->name('quemsomos.landing');



Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', 'admin\\DashController@index')->name('index.admin');
    Route::get('/parceiros', 'landing\\ParceirosController@index')->name('parceiros.admin');
    Route::get('/parceiros/novo', 'landing\\ParceirosController@create')->name('parceirosCreate.admin');
    Route::post('/parceiros', 'landing\\ParceirosController@store')->name('parceirosStore.admin');
    Route::get('/parceiros/{id}', 'landing\\ParceirosController@edit')->name('parceirosEdit.admin');
    Route::patch('/parceiros/{id}', 'landing\\ParceirosController@update')->name('parceirosUpdate.admin');
    Route::delete('/parceiros/{id}', 'landing\\ParceirosController@destroy')->name('parceirosDestroy.admin');


    Route::get('/projetos', 'landing\\ProjetosController@index')->name('projetos.admin');
    Route::get('/projetos/new', 'landing\\ProjetosController@create')->name('prejetoscreate.admin');
    Route::get('/projetos/{id}', 'landing\\ProjetosController@edit')->name('projetosedit.admin');
    Route::post('/projetos', 'landing\\ProjetosController@store')->name('prejetosstore.admin');
    Route::patch('/projetos/{id}', 'landing\\ProjetosController@update')->name('prejetosupdate.admin');
    Route::delete('/projetos/{id}', 'landing\\ProjetosController@destroy')->name( 'projetosdestroy.admin');

});


