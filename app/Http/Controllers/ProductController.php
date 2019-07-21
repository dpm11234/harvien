<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use JWTAuth;
use Validator;
use App\Http\Resources\Product\ProductCollection;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Product\ProductResource;

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
        $limit = 15;
        $products = new Product;
        if (request()->has('limit')) { 
            $limit = request('limit');
        }

        if(request()->has('brands')) {
            $products = $products->whereIn('brand_id', request('brands'));
        }

        if(request()->has('from')) {
            $products = $products->where('price', '>=', request('from'));
        }

        if(request()->has('to')) {
            $products = $products->where('price', '<=', request('to'));
        }

        

        // $products = Product::paginate($limit);
        $proPagination = $products->paginate($limit);
        $proCollect   = ProductCollection::collection($proPagination);
        
        return $this->respondWithPagination(
            $proPagination, 
            ['products' => $proCollect]
        );
        // return  ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$product = (Product::find($id))) {
            return $this->respondNotFound('Product not found!');
        }
        return $this->respond(new ProductResource($product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
