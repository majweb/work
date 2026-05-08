@component('mail::message')
# Testowa wiadomość Markdown

{{ $content }}

Dziękujemy,<br>
{{ config('app.name') }}
@endcomponent
