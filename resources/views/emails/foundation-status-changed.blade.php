<x-mail::message>
# Witaj, {{ $foundationName }}!

Twoje konto fundacji w serwisie **{{ config('app.name') }}** zostało aktywowane przez administratora.

Możesz teraz zalogować się do swojego panelu, aby przeglądać historię transakcji i statystyki wsparcia.

**Dane do logowania:**
- **Adres E-mail:** {{ $email }}
- **Kod rejestracyjny:** `{{ $registrationCode }}`

<x-mail::button :url="$loginUrl">
Przejdź do logowania
</x-mail::button>

Jeśli masz jakiekolwiek pytania, skontaktuj się z nami pod adresem: [partners@work4you.global](mailto:partners@work4you.global).

Dziękujemy, że jesteś z nami!<br>
Zespół {{ config('app.name') }}
</x-mail::message>
