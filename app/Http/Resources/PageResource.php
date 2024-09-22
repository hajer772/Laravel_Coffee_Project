<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [];
        if ($this->identifier === 'feature_page' || $this->identifier === 'counter_page') {

            $data['id'] = $this->id;
            $data['identifier'] = $this->identifier;
            $data['title'] = $this->title;
            $data['sub_title'] = $this->sub_title;
        }

        else if ($this->identifier === 'first_separator' || $this->identifier === 'second_separator') {

            $data['id'] = $this->id;
            $data['identifier'] = $this->identifier;
            $data['title'] = $this->title;
            $data['sub_title'] = $this->sub_title;
            $data['image'] = $this->image;
        } else {

            $data['id'] = $this->id;
            $data['identifier'] = $this->identifier;
            $data['title'] = $this->title;
            $data['description'] = $this->description;
            $data['image'] = $this->image;
        }

        return $data;
    }
}
