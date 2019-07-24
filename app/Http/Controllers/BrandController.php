<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends ApiController
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show', 'getAddToCart');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return $this->respond(compact('brand'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$brand = (Brand::find($id))) {
            return $this->respondNotFound('Brand not found!');
        }
        return $this->respond(compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brandData = $request->validate([
            'name' => 'required|max:255'
        ]);
        $brand = Brand::create($brandData);

        return $this->respondCreated('Created Product Successfully', compact('brand'));
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
        if(!$brand = Brand::find($id)) {
            return $this->respondNotFound('Brand not found!');
        }
        $brand->update($request->validated());
        return $this->respondData($brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$brand = Brand::find($id)) {
            return $this->respondNotFound('Brand not found!');
        }
        $brand->delete();
        return $this->respond(['message'=> 'Brand deleted']);
    }
}
