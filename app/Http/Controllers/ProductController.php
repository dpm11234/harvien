<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Product;
// use Validator;
use \Illuminate\Http\Response as Res;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Http\Requests\ProductRequest;

class ProductController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $product = Product::create($request->validated());

        return $this->respondCreated('Created Product Successfully', $product);
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
        return $this->respondData(new ProductResource($product), Res::HTTP_OK);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request,int $id)
    {
        if(!$product = Product::find($id)) {
            return $this->respondNotFound('Product not found!');
        }
        $product->update($request->validated());
        return $this->respondData(new ProductResource($product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$product = Product::find($id)) {
            return $this->respondNotFound('Product not found!');
        }
        $product->destroy($id);
        return $this->respond(['message'=> 'Product deleted']);
    }
}
