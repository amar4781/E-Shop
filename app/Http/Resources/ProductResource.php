<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product_name'=>$this->name,
            'Brand' => $this->brand,
            'details'=> $this->details,
            'description'=>$this->description,
            'movement'=>$this->movement,
            'price'=>$this->price,
            'image'=>$this->image ? url( $this->image) : null,
            'gender'=>$this->gender,
            'size'=>$this->size,
            'images' => $this->images->map(function ($gallery) {
                return url( $gallery->image_path);
            })->toArray(),

        ];
    }
}
