<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $images = $this->imageDetails()->get()
        // ->map(function ($image) {
        //     return $image->image_url;
        // })
        // ->toArray();
        // return array_merge(parent::toArray($request), [
        //     'images' => $images,
        // ]);
        return parent::toArray($request);
    }
}
