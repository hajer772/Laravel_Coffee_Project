<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'category_id' => 'required_without:id|exists:categories,id',
            'image' => 'required_without:id|max:5000|image',
            'files' => 'nullable|array',
            'files.*' => 'mimes:ppt,pptx,doc,docx,pdf,xls,xlsx,txt|max:5000',

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string',Rule::unique('product_translations','title')->ignore($this->id, 'product_id')]];
            $rules += [$locale . '.description' => ['nullable', 'string']];
        }

        return $rules;
    }
}
