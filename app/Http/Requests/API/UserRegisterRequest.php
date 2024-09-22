<?php

namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UserRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "first_name" => "required|string|min:2|max:100",
            "last_name" => "required|string|min:2|max:100",
            "email" => "required|email|unique:users,email," . $this->id,
            "password" => "required|min:6|max:50",
            "password_confirmation" => "required|same:password|min:6|max:50",
            "profile_image" => "nullable|image|mimes:png,jpg,jpeg,webp|max:1024",
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = failureResponse(
            $validator->errors(),
            trans("message.something_wrong"),
            400
        );

        throw new ValidationException($validator, $response);
    }
}
