<x-mail::message>
# Witaj!

Otrzymałeś zapytanie ofertowe w systemie **{{ config('app.name') }}**.

<x-mail::button :url="$link">
    Odpowiedz na zapytanie
</x-mail::button>

Dziękujemy,<br>
{{ config('app.name') }}
</x-mail::message>
