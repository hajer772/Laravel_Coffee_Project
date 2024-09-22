<?php

namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class ContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email',
            'message' => 'required|max:500',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:30',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = failureResponse($validator->errors(), __("message.something_wrong"), 400);
        throw new ValidationException($validator, $response);
    }
}
