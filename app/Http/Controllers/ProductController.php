<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Product;
// use Validator;
use \Illuminate\Http\Response as Res;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Cart;
use Lanin\Laravel\ApiDebugger\Debugger;

class ProductController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Product;
        $limit = request('limit', 15);

        // if(request()->has('type')) {
        //     $products 
        // }

        if (request()->has('brands')) {
            $products = $products->whereIn('brand_id', request('brands'));
        }

        if (request()->has('from')) {
            $products = $products->where('price', '>=', request('from'));
        }

        if (request()->has('to')) {
            $products = $products->where('price', '<=', request('to'));
        }



        // $products = Product::paginate($limit);
        $proPagination  = $products->paginate($limit);
        $proCollect     = ProductCollection::collection($proPagination);

        return $this->respondWithPagination(
            $proPagination,
            ['products' => $proCollect]
        );
        // return  ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $product = Product::create($request->validated());
        $product = new ProductResource($product);
        return $this->respondCreated('Created Product Successfully',compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$product = (Product::find($id))) {
            return $this->respondNotFound('Product not found!');
        }
        return $this->respond(['product' => new ProductResource($product)], Res::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Requests\ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, int $id)
    {
        if (!$product = Product::find($id)) {
            return $this->respondNotFound('Product not found!');
        }
        $product->update($request->validated());
        $product = new ProductResource(($product));
        return $this->respond(compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$product = Product::find($id)) {
            return $this->respondNotFound('Product not found!');
        }
        $product->delete();
        return $this->respond(['message' => 'Product deleted']);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  App\Requests\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getAddToCart(Request $request, $id)
    // {
    //     $request->session()->put('cart', null);

    //     if (!$product = Product::find($id)) {
    //         return $this->respondNotFound('Product not found!');
    //     }
    //     $oldCart    = $request->session()->has('cart') ? $request->session()->get('cart') : null;
    //     $cart       = new Cart($oldCart);
    //     $cart->add(new ProductCollection($product), $id);

    //     $request->session()->put('cart', $cart);
    //     return  $this->respond(['cart' => $cart->toJson()]);
    // }
}
