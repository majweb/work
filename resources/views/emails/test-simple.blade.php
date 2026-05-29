@component('mail::message')
# Testowa wiadomość Markdown

{{ $content }}

@component('mail::button', ['url' => config('app.url')])
Testuj Przycisk
@endcomponent

Dziękujemy,<br>
{{ config('app.name') }}
@endcomponent
