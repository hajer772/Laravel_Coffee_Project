<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required_without:id|email|unique:admins,email,'.$this->id,
            'password' => 'required_without:id|confirmed',
            'password_confirmation' => 'required_without:id|same:password',
            'first_name' => 'required_without:id',
            'last_name' => 'required_without:id',
            'role_id' => 'required|exists:roles,id',
        ];
    }
}
