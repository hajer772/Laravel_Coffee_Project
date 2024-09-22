<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PortfolioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'image' => 'required_without:id|max:5000|image',
            'files' => 'nullable|array',
            'files.*' => 'mimes:ppt,pptx,doc,docx,pdf,xls,xlsx,txt|max:5000',

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string',Rule::unique('portfolio_translations','title')->ignore($this->id, 'portfolio_id')]];
            $rules += [$locale . '.description' => ['nullable', 'string']];
        }

        return $rules;
    }
}
