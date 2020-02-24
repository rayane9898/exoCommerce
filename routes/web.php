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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/',"FruitsController@index")->name("welcome");
Route::get('/ajoutFruits', "FruitsController@create")->name('ajoutFruits');
Route::post('/saveFruits',"FruitsController@store")->name("saveFruit");
Route::get('/modifier/{id}', "FruitsController@edit")->name("edit");
Route::post('/update/{id}', "FruitsController@update")->name("update");
Route::get("/delete/{id}", "FruitsController@destroy")-> name("delete");

