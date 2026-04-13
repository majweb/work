<x-mail::message>
# Nowe zgłoszenie nielegalnych treści

Administratorze,

Otrzymano nowe zgłoszenie dotyczące nielegalnych treści lub naruszenia regulaminu poprzez stronę **Work4You.Global**.

## Dane zgłoszenia:

- **Zakres zgłoszenia:** {{ __('scope_options.' . $data['scope'], [], 'pl') }}
- **Status podmiotu sygnalizującego:** {{ $data['signaling_entity'] ? 'TAK' : 'NIE' }}
- **Imię i nazwisko:** {{ $data['name'] }}
- **Adres e-mail:** {{ $data['email'] }}
- **Nazwa przedsiębiorcy:** {{ $data['company_name'] ?? 'Nie podano' }}
- **Linki (URL):**
{{ $data['links'] }}

## Szczegóły zgłoszenia:

- **Opis treści i powody nielegalnego charakteru:**
{{ $data['details'] }}

- **Naruszone przepisy prawa lub regulaminu:**
{{ $data['legal_provision'] ?? 'Nie podano' }}

- **Dodatkowe informacje:**
{{ $data['additional_info'] ?? 'Nie podano' }}

- **Oświadczenie:** Potwierdzam, że działam w dobrej wierze oraz że informacje zawarte w zgłoszeniu są dokładne i prawdziwe.

Pozdrawiamy,<br>
{{ config('app.name') }}
</x-mail::message>
