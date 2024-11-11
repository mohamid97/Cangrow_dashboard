<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailsResource extends JsonResource
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
            'id'=>$this->id,
            'price'    =>$this->price,
            'category' =>isset($this->category_id) ? $this->category: null,
            'name'     =>$this->name,
            'des'       =>$this->des,
            'meta_title'=>$this->meta_title,
            'meta_des'  =>$this->meta_des,
            'slug'      =>$this->slug,
            'sku'=>$this->sku,
            'old_price'=>$this->old_price,
            'discount'=>$this->discount,
            'gallery'=>ProductGallerResource::collection($this->gallery),
            'stock'=>$this->stock,
            'files'=> ProductFileResource::collection($this->files),
            'props'=> ProductsProps::collection($this->props),
            'file_path'=>asset('uploads/images/products'),
            'video'=> $this->video

        ];
    }
}
