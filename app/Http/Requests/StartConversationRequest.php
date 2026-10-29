<?php

namespace App\Http\Requests;

use App\Rules\NoForbiddenWords;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Pierwsza wiadomość pracownika do firmy lub rekrutera (z widoku oferty albo firmy).
 */
class StartConversationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return (bool) $this->user()?->isMessengerWorker();
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'employer_id' => ['required', 'integer', 'exists:users,id'],
            'project_id' => ['nullable', 'integer', 'exists:projects,id'],
            'body' => ['required', 'string', 'max:5000', new NoForbiddenWords],
        ];
    }

    public function attributes(): array
    {
        return ['body' => __('messenger.messageAttribute')];
    }
}
