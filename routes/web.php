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

Route::get("/","FeedsController@ultimasNoticias");
Route::get("/buscarPortada","FeedsController@buscarPortada");

Route::resource("/feeds","crudController");
