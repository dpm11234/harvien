<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Product;
use App\Cart;
use App\Http\Resources\Product\ProductCollection;
use Symfony\Component\Debug\Debug;

class CartController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart');
        $cart = (new Cart($cart))->toJson();

        return $this->respond(compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "products"           => "required|array|min:1",
            "products.*.id"      => "required|exists:products,id",
            "products.*.qty"     => "required|numeric|min:0",
        ]);

        if($validator->fails()) {
            $this->respondValidationError("Invalid Fields", $validator->errors());
        }

        $params = $validator->validated();
        $cart = new Cart;
        foreach($params['products'] as $product) {
            $qty        = $product['qty'];
            if(!$qty) continue;
            $id         = $product['id'];
            // \Debugger::dump($id, $qty);
            $product    = Product::find($id);
            $cart->update(new ProductCollection($product), $id, $qty);
            
        }
        $request->session()->put('cart', $cart);
        $cart = $cart->toJson();
        return $this->respond(compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, int $id)
    {
        // $request->session()->put('cart', null);


        if (!$product = Product::find($id)) {
            return $this->respondNotFound('Product not found!');
        }
        $oldCart    = $request->session()->has('cart') ? $request->session()->get('cart') : null;
        $cart       = new Cart($oldCart);
        $cart->add(new ProductCollection($product), $id);

        $request->session()->put('cart', $cart);
        $cart = $cart->toJson();
        return  $this->respond(compact('cart'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // $request->session()->flush();
        $cart = $request->session()->get('cart');
        $cart = $cart?$cart:new Cart();
        $cart->remove($id);
        $cart = (new Cart($cart))->toJson();
        return $this->respond(compact('cart'));
    }
}
