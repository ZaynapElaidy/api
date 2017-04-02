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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// }); 
    Route::get('/', 'TasksController@index');
	Route::post('/','TasksController@add');
	Route::get('/delete/{id}','TasksController@delete');
	Route::post('/edit/{id}/task','TasksController@update');
	Route::get('/edit/{id}','TasksController@edit');