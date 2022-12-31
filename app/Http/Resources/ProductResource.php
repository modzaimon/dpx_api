<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'        =>   $this->id,
            'sku'       =>   $this->sku,
            'name'      =>   $this->name,
            'img_link'  =>   $this->img_link,
            'des'       =>   $this->des,
            'price'     =>   $this->price,
            'size'      =>   $this->size,
            'weight'    =>   $this->weight,
            'created_at'=>   $this->created_at,
            'updated__at'=>  $this->updated__at
        ];
    }
}
