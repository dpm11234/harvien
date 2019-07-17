<?php

Route::get('/', function () {
    return view('home');
});

Route::get('products', 'ProductsController@index');
Route::get('products/create', 'ProductsController@create');
Route::post('products', 'ProductsController@store');
Route::get('products/{product}', 'ProductsController@show');
Route::patch('products/{product}', 'ProductsController@update');
Route::get('products/{product}/edit', 'ProductsController@edit');
