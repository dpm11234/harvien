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
}
