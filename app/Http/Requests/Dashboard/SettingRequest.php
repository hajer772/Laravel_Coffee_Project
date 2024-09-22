<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SettingRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'logo' => 'required_without:id|max:900|image',
            'white_logo' => 'required_without:id|max:900|image',
            'favicon' => 'required_without:id|max:900|image',
            'footer_img' => 'required_without:id|max:900|image',
            'breadcrumb' => 'required_without:id|max:900|image',
            'phone' => 'nullable|string|regex:/^[0-9+]+/|min:6|max:30',
            'email' => 'nullable|email|unique:admins,email,'.$this->id,

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.website_title' => ['required', 'string',Rule::unique('setting_translations','website_title')->ignore($this->id, 'setting_id')]];
            $rules += [$locale . '.address' => ['nullable', 'string','max:300']];
            $rules += [$locale . '.copyrights' => ['nullable', 'string','max:300']];
        }

        return $rules;
    }
}
