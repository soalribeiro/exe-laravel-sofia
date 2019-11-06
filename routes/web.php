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

/**
 * Unauthenticated Routes
 */
Route::get('/', 'MainController@index')->name('index');

/**
 *  Auth & Registration
 */
Auth::routes();

/**
 * Authenticated only Routes
 */
Route::get('/home', 'HomeController@index')->name('home');


/* mostrar jornais */
Route::get('/jornais', 'JornalController@index')->name('lista-jornais');

/* inserir jornal */
Route::get('/inserir-jornal', 'JornalController@create')->name('inserir-jornal-form');
Route::post('/inserir-jornal', 'JornalController@store')->name('inserir-jornal');

/* editar jornal */
Route::get('/editar-jornal/{jornal}', 'JornalController@edit')->name('editar-jornal-form');
Route::put('/editar-jornal/{jornal}/edit', 'JornalController@update')->name('editar-jornal');

/* eliminar jornal */
Route::delete('/elimina-jornal/{jornal}', 'JornalController@destroy')->name('eliminar-jornal');


/* mostrar notícias */
Route::get('/noticias', 'NoticiaController@index')->name('lista-noticias');

/* inserir notícias */
Route::get('/inserir-noticia', 'NoticiaController@create')->name('inserir-noticia-form');
Route::post('/inserir-noticia', 'NoticiaController@store')->name('inserir-noticia');

/* editar notícias */
Route::get('/editar-noticia/{noticium}', 'NoticiaController@edit')->name('editar-noticia-form');
Route::put('/editar-noticia/{noticium}/edit', 'NoticiaController@update')->name('editar-noticia');

/* eliminar notícias */
Route::delete('/elimina-noticia/{noticium}', 'NoticiaController@destroy')->name('eliminar-noticia');


/* mostrar secções */
Route::get('/lista-seccaos', 'SeccaoController@index')->name('lista-seccaos');

/* inserir secções */
Route::get('/inserir-seccao', 'SeccaoController@create')->name('inserir-seccao-form');
Route::post('/inserir-seccao', 'SeccaoController@store')->name('inserir-seccao');

/* editar secções */
Route::get('/editar-seccao/{seccao}', 'SeccaoController@edit')->name('editar-seccao-form');
Route::put('/editar-seccao/{seccao}/edit', 'SeccaoController@update')->name('editar-seccao');

/* eliminar secções */
Route::delete('/elimina-seccao/{seccao}', 'SeccaoController@destroy')->name('eliminar-seccao');


/**
 * Backoffice Routes
 */
Route::group(
    ['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function () {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');
    }
);
