<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BuyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'price'=>$this->price,
            'points'=>$this->points,
            'product_type'=>$this->product_type,
            'trans'=>$this->trans[app()->getLocale()],
            'trans_name'=>$this->trans_name[app()->getLocale()]
        ];
    }
}
