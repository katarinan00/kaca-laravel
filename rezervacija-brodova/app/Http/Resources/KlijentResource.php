<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KlijentResource extends JsonResource
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
            'Ime prezime klijenta -> ' => $this->resource->imePrezime,
            'Broj telefona -> ' => $this->resource->brojTelefona,
            'Grad -> ' => $this->resource->grad
        ];
    }
}
