<?php
namespace App\Repository\Transformers;
use App\Repository\Transformers\Transformer;

class ProductTransformer extends Transformer
{
    public function transform($product)
    {
        return array_merge($product, [
            'images' => $product->imageDetails(),
        ]);
    }
}
