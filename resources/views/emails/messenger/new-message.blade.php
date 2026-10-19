<x-mail::message>
# {{ __('messenger.mail.newMessageHeading') }}

@if ($projectTitle)
{{ __('messenger.mail.newMessageAboutProject', ['name' => $senderName, 'project' => $projectTitle]) }}
@else
{{ __('messenger.mail.newMessageLine', ['name' => $senderName]) }}
@endif

<x-mail::panel>
{{ $excerpt }}
</x-mail::panel>

@if ($isPending)
{{ __('messenger.mail.pendingHint') }}
@endif

<x-mail::button :url="$url">
{{ __('messenger.openConversation') }}
</x-mail::button>

{{ __('messenger.mail.regards') }}<br>
{{ config('app.name') }}
</x-mail::message>
