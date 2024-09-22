<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    public function toArray($request)
    {

        $data['settings'] = [
            'website_title' => $this->website_title,
            'meta_keywords' => $this->meta_keywords,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'copyrights' => $this->copyrights,
            'address' => $this->address,
            'footer_description' => $this->footer_description,
            'map' => $this->map,
            'logo' => $this->logo,
            'white_logo' => $this->white_logo,
            'favicon' => $this->favicon,
            'breadcrumb' => $this->breadcrumb,
            'footer_img' => $this->footer_img,
        ];

        $data['contacts'] = [
            'mobile' => SettingContactResource::collection($this->contact()->where('type', 'mobile')->get()),
            'whatsapp' => SettingContactResource::collection($this->contact()->where('type', 'whatsapp')->get()),
            'telephone' => SettingContactResource::collection($this->contact()->where('type', 'telephone')->get()),
            'email' => SettingContactResource::collection($this->contact()->where('type', 'email')->get()),
            'social' => SettingContactResource::collection($this->contact()->where('type', 'social')->get()),
        ];

        return $data;

    }

}
