<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Products
Route::get('products', 'ProductController@index')->name('products.index');

// // List Single Product
// Route::get('products/{product}', 'ProductController@show')->name('products.show');

// // Create new Product
// Route::post('products', 'ProductController@store');

// // Update new Product
// Route::patch('products', 'ProductController@store');

// // Delete Product

// Route::delete('products', 'ProductController@destroy');

Route::group(['middleware' => 'cors'], function () {
    Route::post('/login', 'UserController@authenticate');
    Route::get('/logout/{api_token}', 'UserController@logout');
    
    Route::resource('products', 'ProductController');
    Route::post('/register', 'UserController@register');
    // Route::get('products/{product}/{slug?}', 'ProductController@show');
});
