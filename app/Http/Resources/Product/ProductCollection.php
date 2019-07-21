<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'brand_id'  => $this->brand_id,
            'name'      => $this->name,
            'price'     => $this->price,
            'discount'  => $this->discount,
            'thumbnail' => $this->thumbnail,
            // 'href'      => [
            //     // 'link'  => $this->url,
            // ]
        ];
    }
}
