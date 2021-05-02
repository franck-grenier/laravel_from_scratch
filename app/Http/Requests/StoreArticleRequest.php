<?php

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = Article::VALIDATION;
        $rules['slug'] = [
            'required',
            'max:255',
            Rule::unique('articles', 'slug')->ignore($this->segment(2)) // REST convention, ie. /articles/{id}
        ];
        return $rules;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug ?? $this->title),
            'user_id' => $this->user()->id
        ]);
    }
}
