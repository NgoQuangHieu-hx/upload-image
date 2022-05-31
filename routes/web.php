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

Route::get('add', function () {
    return view('add');
});

Route::get('edit/{id}', function () {
    return view('edit');
});

Route::post('import-image', 'importController@storange');

Route::post('show-image', 'importController@show');

Route::post('/create', 'StudentController@index'); 
