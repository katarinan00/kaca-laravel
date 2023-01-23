<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RezervacijaResource extends JsonResource
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
            'Cena rezervacije -> ' => $this->resource->cena,
            'Nacin placanja -> ' => $this->resource->nacinPlacanja,
            'Klijent -> ' => new KlijentResource($this->resource->klijent),
            'Brod -> ' => new BrodResource($this->resource->brod)

        ];
    }
}
