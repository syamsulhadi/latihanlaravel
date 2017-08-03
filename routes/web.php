<?php


Route::get('/', function () {
    return view('welcome');
});
Route::resource('crud','CRUDController');
Route::post('crud', 'CRUDController@store');
