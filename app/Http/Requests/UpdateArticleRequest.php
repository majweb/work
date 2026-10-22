<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Spatie\MediaLibraryPro\Rules\Concerns\ValidatesMedia;

class UpdateArticleRequest extends FormRequest
{
    use ValidatesMedia;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Admin edytuje każdy artykuł (ArticleAcceptController), firma tylko własny - sprawdzane przed walidacją
        return request()->user()->hasRole('admin')
            || request()->user()->can('update', $this->route('article'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string'],
            'category' => ['required', 'array'],
            'short_description' => ['required', 'string', 'max:500'],
            'meta_title' => ['nullable', 'string', 'max:70'],
            'alt' => ['nullable', 'string', 'max:70'],
            'meta_description' => ['nullable', 'string', 'max:160'],
            'meta_keywords' => ['required', 'string', 'max:160'],
            // Rynek artykułu - jeden kraj, jak w banerach
            'country_code' => [$this->isVersion() ? 'nullable' : 'required', 'string', Rule::exists('countries', 'countryCode')],
            'active' => ['boolean'],
            // Wersja językowa korzysta ze zdjęcia i rynków oryginału
            'photo' => [$this->isVersion() ? 'nullable' : 'required', 'array'],
            'translate_countries' => ['nullable', 'array'],
            'translate_countries.*' => ['string', Rule::exists('countries', 'countryCode')],

        ];
    }

    private function isVersion(): bool
    {
        return (bool) $this->route('article')?->isVersion();
    }

    public function articleData()
    {
        return $this->validated();
    }

    public function attributes(): array
    {
        return [
            'title' => strtolower(__('translate.title')),
            'content' => strtolower(__('translate.content')),
            'country_code' => strtolower(__('translate.country')),
            'photo' => strtolower(__('translate.photo')),
            'short_description' => strtolower(__('translate.shortDescription')),
            'category' => strtolower(__('translate.category')),
        ];
    }
}
