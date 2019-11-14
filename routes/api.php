<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::resource('jornal', 'Api\JornalApiController');
Route::resource('noticia', 'Api\NoticiaApiController');
Route::resource('feedback', 'Api\FeedbackApiController');
Route::resource('seccao', 'Api\SeccaoApiController');
Route::resource('tipo', 'Api\TipoApiController');

/* Rotas protegidas por autenticação */
/* eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNzQ0ZGM1MWM5ZGU3MTU3MDY4MjkyYWRhZmZhZDZlOWU1NjgwZDUwMjAxYzRiZDM2MmNhMzhmOWQ1YTg1MzRkNzZhNjAzMmNlZDgzZjU3NjAiLCJpYXQiOjE1NzMyMzc1OTQsIm5iZiI6MTU3MzIzNzU5NCwiZXhwIjoxNjA0ODU5OTk0LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.ihuQJpPb0kTCzTYmebvvVnAfye1uGuvHuUyJNpGcx0psFud8iJevPiCqoILxBA-LhUjQAjx6DOzxnD7FHEmw8BZ0K3Xy4nm4CLhj3oBNqgxINqTivoGBHfAu50j5bsVpK4D1NyfASaFxGBLpSpBIrTwJr_YTKG6PINfNgBmJfQRps-zV4cKKIP93HTi9UuxAVFdm8IEuDHvt2ZYDmWCJvghacQylm8rtWryNGBWHAA3YH_5R58pCbn_x4dCAM_jWED_-rLiAiRGXA8RXZlJcb-sWbHBILZrv4u-PbJ31mX0OASV3-YJ3dmxQ8_eHAM5dAWJGFuSw5GQ908s89urRtCN-TZPalBIfDoyKiQ7Oa10gmlIZseBNApDCiNo1ltqCE01eVABWOPAd-ysgSxGIvo_4yNH9ilBtS3XlFE1-7gyhY7IKu7XwXAm2tqUmp-lhE2DRENUHpE1qFiZLzLv-3V72AqqhJJmmEtRt5RFht-A8DhM5G1e2quGPNG68OBCC6UCxFtbabYYuT8ON3jVAIQ2w4qpC1lQPSpYooMK0jcDkS-5drCdjN9HxthK9z8x-GoHDF9YPO2xJ7vC04j9WkZaw_RTOqqisJNkZCJvA5b2NloI0XOSgGy8IbGebYMhpC1A0126IQI7bKcNIF2nz2z4nOL2kufPEWKg2dp8uzQw */
/* Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('jornal', 'Api\JornalApiController');
    Route::resource('noticia', 'Api\NoticiaApiController');
    Route::resource('feedback', 'Api\FeedbackApiController');
    Route::resource('seccao', 'Api\SeccaoApiController');
    Route::resource('tipo', 'Api\TipoApiController');
}); */
