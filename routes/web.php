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
Route::get('/editar-jornal/{jornal}', 'JornalController@formjornal')->name('editar-jornal-form');
Route::put('/editar-jornal/{jornal}/edit', 'JornalController@update')->name('editar-jornal');

/* editar jornal */
Route::get('/inserir-jornal', 'JornalController@inserirjornal')->name('inserir-jornal-form');
Route::put('/inserir-jornal', 'JornalController@store')->name('inserir-jornal');



/**
 * Backoffice Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function()
    {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');
    }
);