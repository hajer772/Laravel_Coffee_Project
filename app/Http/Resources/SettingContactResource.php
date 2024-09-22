<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingContactResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'contact' => $this->contact,
            'type' => $this->type,
            'icon' => $this->icon,
        ];
    }
}
