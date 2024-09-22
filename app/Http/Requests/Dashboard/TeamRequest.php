<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'image' => 'required_without:id|max:900|image',

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string', Rule::unique('team_translations', 'title')->ignore($this->id, 'team_id')]];
            $rules += [$locale . '.sub_title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['nullable', 'string']];
        }

        return $rules;
    }
}
