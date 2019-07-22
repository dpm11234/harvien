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
    return redirect()->route('home');
});

Route::view('contact', 'routes.contact');
Route::get('home', function () {

    $images = [
        [
            'name' => 'RAM DDR7 MX945',
            'price' => '$700',
            'imgUrl' => 'https://cdn.mos.cms.futurecdn.net/PdSTCqTbFBxSpNUFNqGaGB.jpg'
        ],
        [
            'name' => 'Headphones AX17',
            'price' => '$500',
            'imgUrl' => 'https://www.wallpapermaiden.com/wallpaper/12879/download/2560x1440/razer-headphones-green.jpgg'
        ],
        [
            'name' => 'ST Keyboard Px17752',
            'price' => '$300',
            'imgUrl' => 'https://topthuthuat.com/wp/wp-content/uploads/2019/03/ban-phim-co-nao-tot-3.jpg'
        ],
    ];

    $title = '';

    return view('routes.home', [
        'images' => $images,
        'title' => $title
    ]);
})->name('home');

Route::get('category', 'PageController@getCategory');
Route::get('my-cart', 'PageController@getMyCart', function () {

    $myProducts = [
        [
            'name' => 'RAM DDR7 MX945',
            'price' => '$700',
            'imgUrl' => 'https://cdn.mos.cms.futurecdn.net/PdSTCqTbFBxSpNUFNqGaGB.jpg'
        ],
        [
            'name' => 'Headphones AX17',
            'price' => '$500',
            'imgUrl' => 'https://www.wallpapermaiden.com/wallpaper/12879/download/2560x1440/razer-headphones-green.jpgg'
        ],
        [
            'name' => 'ST Keyboard Px17752',
            'price' => '$300',
            'imgUrl' => 'https://topthuthuat.com/wp/wp-content/uploads/2019/03/ban-phim-co-nao-tot-3.jpg'
        ],
    ];

    return view('routes.my-cart', [
        'myProducts' => '$myProducts'
        ]);
});
Route::get('category/product-detail', 'PageController@getProductDetail');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
