<x-mail::message>
# Nowa wiadomość z formularza kontaktowego Work4You.Global

Administratorze,

Otrzymano nową wiadomość poprzez formularz Kontakt na stronie **Work4You.Global**.

## Szczegóły zgłoszenia:

- **Adres e-mail nadawcy:** {{ $email }}
- **Temat wiadomości:** {{ $temat }}
- **Treść wiadomości:**
{{ $wiadomosc }}

Pozdrawiamy,<br>
{{ config('app.name') }}
</x-mail::message>
