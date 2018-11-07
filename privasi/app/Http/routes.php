<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'SavePost@read_data');

Route::post('prosestambah', 'SavePost@tambahdata' );

Route::get('get/{id_post}', 'SavePost@view_data');

Route::get('up/{id_post}', 'SavePost@update_view');

Route::put('up_action/{id_post}', 'SavePost@update_act');

Route::get('del/{id_post}', 'SavePost@delete');

