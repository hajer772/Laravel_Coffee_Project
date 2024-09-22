<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'image' => 'nullable|max:900|image',
            'identifier' => 'required_without:id',
            'link' => 'nullable|url',
            'video' => 'nullable|url',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string', Rule::unique('page_translations', 'title')->ignore($this->id, 'page_id')]];
            $rules += [$locale . '.sub_title' => ['nullable', 'string','max:200']];
            $rules += [$locale . '.description' => ['nullable', 'string']];
        }

        return $rules;
    }
}
