<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Products
Route::get('products', 'ProductController@index');

// List Single Product
Route::get('products/{id}', 'ProductController@show');

// Create new Product
Route::post('products', 'ProductController@store');

// Update new Product
Route::patch('products', 'ProductController@store');

// Delete Product

Route::delete('products', 'ProductController@destroy');


Route::group(['middleware' => 'cors', 'prefix' => '/v1'], function () {
    Route::post('/login', 'UserController@authenticate');
    Route::post('/register', 'UserController@register');
    Route::get('/logout/{api_token}', 'UserController@logout');
});
