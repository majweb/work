<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PointsResource extends JsonResource
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
            'start'=>$this->start ? Carbon::parse($this->start)->format('Y-m-d H:s') : NULL,
            'end'=>$this->end ? Carbon::parse($this->end)->format('Y-m-d H:s') : NULL,
            'qty'=>$this->qty,
            'product'=>new BuyResource($this->whenLoaded('product'))
        ];
    }
}
