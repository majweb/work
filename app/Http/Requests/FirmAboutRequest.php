<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FirmAboutRequest extends FormRequest
{
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
            'www' => ['required', 'string','url:http,https'],
            'opinion_google' => ['nullable','string','max:100','url:http,https'],
            'opinion_trust' => ['nullable','string','max:100','url:http,https'],
            'opinion_facebook' => ['nullable','string','max:100','url:http,https'],
            'social_facebook' => ['nullable','string','max:100','url:http,https'],
            'social_google' => ['nullable','string','max:100','url:http,https'],
            'social_x' => ['nullable','string','max:100','url:http,https'],
            'social_instagram' => ['nullable','string','max:100','url:http,https'],
            'social_linkedin' => ['nullable','string','max:100','url:http,https'],
            'social_tiktok' => ['nullable','string','max:100','url:http,https'],
            'count_workers' => ['nullable','integer','digits between:1,5'],
            'annual_turnover' => ['nullable','string','max:50'],
            'video' => ['nullable','sometimes','file','mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4','max:50240'],
        ];
    }

    public function aboutData(){
        return $this->validated();
    }
    public function attributes(): array
    {
        return [
            'nip' => strtolower(__('auth.nip')),
            'opinion_google' => strtolower(__('auth.opinion_google')),
            'opinion_trust' => strtolower(__('auth.opinion_trust')),
            'opinion_facebook' => strtolower(__('auth.opinion_facebook')),
            'social_facebook' => strtolower(__('auth.social_facebook')),
            'social_google' => strtolower(__('auth.social_google')),
            'social_x' => strtolower(__('auth.social_x')),
            'social_instagram' => strtolower(__('auth.social_instagram')),
            'social_linkedin' => strtolower(__('auth.social_linkedin')),
            'social_tiktok' => strtolower(__('auth.social_tiktok')),
            'count_workers' => strtolower(__('auth.count_workers')),
            'annual_turnover' => strtolower(__('auth.annual_turnover'))
        ];
    }
}
