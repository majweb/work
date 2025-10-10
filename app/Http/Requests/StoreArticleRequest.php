<?php

namespace App\Http\Requests;

use App\Lang\Lang;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Spatie\MediaLibraryPro\Rules\Concerns\ValidatesMedia;

class StoreArticleRequest extends FormRequest
{
    use ValidatesMedia;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return request()->user()->hasRole('firm');

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
            'short_description' => ['required', 'string','max:500'],
            'meta_title' => ['nullable', 'string','max:70'],
            'alt' => ['nullable', 'string','max:70'],
            'meta_description' => ['nullable', 'string','max:160'],
            'meta_keywords' => ['required', 'string','max:160'],
            'lang' => ['required', 'string', new Enum(Lang::class)],
            'active' => ['boolean'],
            'photo' => ['required', 'array'],
        ];
    }

    public function articleData(){
        return $this->validated();
    }
    public function attributes(): array
    {
        return [
            'title' => strtolower(__('translate.title')),
            'content' => strtolower(__('translate.content')),
            'lang' => strtolower(__('translate.language')),
            'photo' => strtolower(__('translate.photo')),
            'short_description' => strtolower(__('translate.shortDescription')),
            'category' => strtolower(__('translate.category')),
        ];
    }

}
