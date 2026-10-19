<?php

namespace App\Http\Requests;

use App\Rules\NoForbiddenWords;
use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (bool) $this->user()?->can('view', $this->route('conversation'));
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        // Administracja pisze bez filtra zakazanych słów
        $body = ['required', 'string', 'max:5000'];
        if (! $this->user()->isMessengerAdmin()) {
            $body[] = new NoForbiddenWords;
        }

        return [
            'body' => $body,
            'project_id' => ['nullable', 'integer'],
        ];
    }

    public function attributes(): array
    {
        return ['body' => __('messenger.messageAttribute')];
    }
}
