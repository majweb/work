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
            'content' => ['required', 'string', 'max:2000'],
            'lang' => ['required', 'string', new Enum(Lang::class)],
            'sections' => ['required', 'array','between:1,5'=>function($attribute, $val, $fail){
                    if(count($val) > 5){
                        $fail('Za dużo elementów');
                    }
            }],
            'sections.*.title'=>['required','string','max:100', 'distinct'],
            'sections.*.description'=>['required','string','max:2000'],
            'baner' => ['required',$this
                ->validateSingleMedia()
                ->extension(['png','jpeg','jpg'])
                ->maxItemSizeInKb(1024)
            ]
        ];
    }

    public function articleData(){
        return $this->validated();
    }
    public function messages(): array
    {
        return [
            'sections.required' => __('auth.addSection'),
            'sections.*.title.required' => __('auth.addSectionTitle'),
            'sections.*.title.distinct' => __('auth.addSectionTitleDistinct'),
            'sections.*.title.max' => __('auth.addSectionTitleMax'),
            'sections.*.description.required' => __('auth.addSectionDescription'),
            'sections.*.description.max' => __('auth.addSectionDescriptionMax')
        ];
    }
    public function attributes(): array
    {
        return [
            'title' => strtolower(__('auth.title')),
            'content' => strtolower(__('auth.content')),
            'lang' => strtolower(__('auth.language')),
        ];
    }

}
