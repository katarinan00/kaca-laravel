<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrodResource extends JsonResource
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
            'ID -> ' => $this->resource->id,
            'Naziv broda -> ' => $this->resource->naziv,
            'Zemlja porekla -> ' => $this->resource->zemljaPorekla,
            'Godiste -> ' => $this->resource->godiste
        ];
    }
}
