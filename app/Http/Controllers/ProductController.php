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

        if (request()->has('brand')) {
            $products = $products->where('brand_id', request('brand'));
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
        return $this->respond(compact('product'));
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
}
