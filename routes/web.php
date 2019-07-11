<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/products', 'ProductsController@render');
Route::post('products', 'ProductsController@store');
