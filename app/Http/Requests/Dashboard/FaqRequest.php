<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FaqRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.question' => ['required', 'string', Rule::unique('faq_translations', 'question')->ignore($this->id, 'faq_id')]];
            $rules += [$locale . '.answer' => ['nullable', 'string']];
        }

        return $rules;
    }
}
