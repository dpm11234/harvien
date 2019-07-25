<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Products
// Route::get('products', 'ProductController@index')->name('products.index');

// // List Single Product
// Route::get('products/{product}', 'ProductController@show')->name('products.show');

// // Create new Product
// Route::post('products', 'ProductController@store');

// // Update new Product
// Route::patch('products', 'ProductController@update');

// // Delete Product

// Route::delete('products', 'ProductController@destroy');

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as'   => 'Product.addToCart',
]);

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::group(['middleware' => 'cors'], function () {
    Route::post('/login', 'UserController@authenticate');
    Route::get('/logout', 'UserController@logout');
    Route::post('/register', 'UserController@register');
    
    Route::apiResource('products', 'ProductController');
    Route::apiResource('brands', 'BrandController');
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', 'CartController@index')->name('cart.index');
        Route::post('/', 'CartController@store')->name('cart.store');
        Route::get('/{id}', 'CartController@addToCart')->name('cart.addToCart');
        Route::delete('/{id}', 'CartController@destroy')->name('cart.destroy');
        // Route::put('/{id}', 'CartController@updateCart')->name('cart.updateCart');
        
        // Route::get('/{id}', ['use' => 'CartController@addToCart', 'as' => 'cart.getAddToCart']);
        // Route::put('/', ['use' => 'CartController@updateCart', 'as' => 'cart.updateCart']);
    });
    // Route::get('products/addtocart/{id}', 'ProductController@addToCart');
    // Route::get('products/{product}/{slug?}', 'ProductController@show');
});
