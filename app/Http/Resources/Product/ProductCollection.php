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
            'name'      => $this->name,
            'price'     => $this->price,
            'discount'  => $this->discount,
            'thumbnail' => $this->thumbnail,
            'href'      => [
                'link'  => route('products.show', $this->id),
            ]
        ];
    }
}
