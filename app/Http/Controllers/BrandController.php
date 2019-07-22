<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends ApiController
{

    public function __construct()
    {
        $this->middleware('api:auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->respondData(['brands' => Brand::all()]);
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
        return $this->respondData($brand);
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
