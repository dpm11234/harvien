<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function render() {
        // $products = [
        //     ['name'=>'sp1', 'price'=>'300'],
        //     ['name'=>'sp2', 'price'=>'400'],
        //     ['name'=>'sp3', 'price'=>'500'],
        //     ['name'=>'sp4', 'price'=>'600']
        // ];
        $products = Product::all();

        $activeProducts = Product::active()->get();
        $inactiveProducts = Product::inactive()->get();

        return view('products', compact('activeProducts', 'inactiveProducts'));
    }

    public function store() {

        $data = request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'active'=>'required'
        ]);


        // $product = new Product();
        // $product->name = request('name');
        // $product->email = request('email');
        // $product->active = request('active');

        // $product->save();

        Product::create($data);

        return back();
    }
}
