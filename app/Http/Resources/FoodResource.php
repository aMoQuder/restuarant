<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{

    public function toArray( $request ) {
        return ( [

            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->image,
            'description' => $this->description,
            'type_id' => $this->type_id,
        ] );
    }
}
