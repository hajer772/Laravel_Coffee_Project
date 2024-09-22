<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsletterResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "email" => $this->email
        ];
    }
}
