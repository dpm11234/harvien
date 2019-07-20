<?php

namespace App\Http\Resources;

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
        $images = $this->imageDetails()->get()->map(function ($image) {
            return $image->name;
        });
        $images = array_flatten($images);
        return array_merge(parent::toArray($request), [
            'images' => $images,
        ]);
    }
}
