<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            "first_name" => "required|string|min:2|max:100",
            "last_name" => "required|string|min:2|max:100",
            "email" =>
                "required_without:id|email|unique:users,email," . $this->id,
            "password" => "required_without:id|min:6",
            "password_confirmation" => "required_without:id|same:password",
            "image" => "nullable|max:900|image",
        ];

        // Remove ("password") validation if ("password") does NOT exist within ($request):
        if (!$this->request->get("password")) {
            unset($rules["password"], $rules["password_confirmation"]);
        }

        return $rules;
    }
}
