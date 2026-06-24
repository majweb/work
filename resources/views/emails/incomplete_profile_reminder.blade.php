@component('mail::message')
# {{ __('notifications.incomplete_profile_subject') }}

{{ __('notifications.incomplete_profile_greeting') }}

{{ __('notifications.incomplete_profile_thanks') }}

{{ __('notifications.incomplete_profile_body_1') }}

{{ __('notifications.incomplete_profile_body_2') }}

{{ __('notifications.incomplete_profile_body_3') }}

{{ __('notifications.incomplete_profile_body_4') }}

@component('mail::button', ['url' => route('profile.show')])
{{ __('Uzupełnij profil') }}
@endcomponent

{{ __('notifications.incomplete_profile_footer') }}
@endcomponent
