<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getContact() {
        return view('routes.contact');
    }

    public function getCategory() {
        return view('routes.category');
    }

    public function getProductDetail() {
        return view('routes.product-detail');
    }

    public function getMyCart() {
        return view('routes.my-cart');
    }
}
