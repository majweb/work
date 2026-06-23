@component('mail::message')
# {{ __('notifications.inactive_title') }}

{{ __('notifications.inactive_body_1') }}

{{ __('notifications.inactive_body_2') }}

{{ __('notifications.inactive_body_3') }}

{{ __('notifications.inactive_body_4') }}
- {{ __('notifications.inactive_bullet_1') }}
- {{ __('notifications.inactive_bullet_2') }}
- {{ __('notifications.inactive_bullet_3') }}

{{ __('notifications.inactive_body_5') }}

@component('mail::button', ['url' => config('app.url')])
{{ __('notifications.login_button') }}
@endcomponent

{{ __('notifications.inactive_body_6') }}

{{ __('notifications.inactive_footer') }}
@endcomponent
