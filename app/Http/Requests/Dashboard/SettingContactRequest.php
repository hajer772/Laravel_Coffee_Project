<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            "type" => "required|string|in:telephone,mobile,email,social,whatsapp",
            "icon" => "required_without:id|string|min:2|max:50",
        ];

        if (request()->type == "email") {
            $rules += [
                "contact" => [
                    "required",
                    "email",
                    "max:255",
                    "unique:contacts,contact," . $this->id,
                ],
            ];
        } elseif (request()->type == "social") {
            $rules += [
                "contact" => [
                    "required",
                    "url",
                    "unique:contacts,contact," . $this->id,
                ],
            ];
        } else {
            $rules += [
                "contact" => [
                    "required",
                    "string",
                    "regex:/^[0-9+]+/",
                    "min:6",
                    "max:30",
                ],
            ];
        }

        return $rules;
    }
}
