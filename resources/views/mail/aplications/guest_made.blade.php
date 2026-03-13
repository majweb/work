<x-mail::message>
# {{ __('Mail-guest-hello') }}

{{ __('Mail-guest-line1') }}

{{ __('Mail-guest-line2') }}

* {{ __('Mail-guest-point1') }}
* {{ __('Mail-guest-point2') }}
* {{ __('Mail-guest-point3') }}

{{ __('Mail-guest-footer') }}

<x-mail::button :url="$registerUrl">
{{ __('Mail-guest-button') }}
</x-mail::button>

{{ __('Mail-thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
