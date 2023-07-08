<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            'user_id' => $this->user->name,
            'order_item' => [
                'id' => $this->id,
                'name' => $this->name,
                'price' => $this->price,
            ],

            // 'order_items' =>  OrderResource::collection($this->orders),
        ];
    }
}
