<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class ProductsController extends Controller
{
    public function index() {
        // $products = [
        //     ['name'=>'sp1', 'price'=>'300'],
        //     ['name'=>'sp2', 'price'=>'400'],
        //     ['name'=>'sp3', 'price'=>'500'],
        //     ['name'=>'sp4', 'price'=>'600']
        // ];
        $products = Product::all();

        // $activeProducts = Product::active()->get();
        // $inactiveProducts = Product::inactive()->get();
        $brands = Brand::all();

        return view('products.index', compact('products'));
    }

    public function create() {
        $brands = Brand::all();

        return view('products.create', compact('brands'));
    }

    public function store() {

        $data = request()->validate([
            'name'=>'required|min:3',
            'brand_id'=>'required',
            'email'=>'required|email',
            'active'=>'required'
        ]);


        // $product = new Product();
        // $product->name = request('name');
        // $product->email = request('email');
        // $product->active = request('active');

        // $product->save();

        Product::create($data);

        return redirect('products');
    }

    public function show(Product $product) {
        // $product = Product::where('id', $product)->firstOrFail();

        return view('products.show', compact('product'));
    }

    public function edit(Product $product) {
      $brands = Brand::all();

      return view('products.edit', compact('product', 'brands'));
    }

    public function update(Product $product) {

    }
}
