<x-mail::message>
# {{__('ApllyMail-hello')}}
{{__('ApllyMail-applyConfirm')}}

<x-mail::button :url="$url">
{{__('ApllyMail-applyLook')}}
</x-mail::button>

{{__('ApllyMail-thanks')}},<br>
{{ config('app.name') }}
</x-mail::message>

