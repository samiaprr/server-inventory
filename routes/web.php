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

Route::get('/', 'HomeController@index');

Route::get('/listServers', 'ServersController@index');

Route::get('/createServer', 'ServersController@create');

Route::post('/createServerAction', 'ServersController@store');

Route::delete('/deleteServerAction/{server_id}', 'ServersController@destroy');

Route::get('/modifyServer/{server_id}', 'ServersController@edit');

Route::post('/updateServerAction/{server_id}','ServersController@update');

Auth::routes(
    ['register' => false]
);
