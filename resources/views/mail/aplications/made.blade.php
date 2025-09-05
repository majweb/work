<x-mail::message>
# {{__('ApllyMail-hello')}}
{{__('ApllyMail-applyConfirm')}}

<x-mail::button :url="$url">
{{__('ApllyMail-applyLook')}}
</x-mail::button>

@if(isset($registerUrl))
<p>
{{ $registerText }}
<a href="{{ $registerUrl }}" style="text-decoration: underline; color: #1a73e8;">{{$registerNow}}</a>
</p>
@endif

{{__('ApllyMail-thanks')}},<br>
{{ config('app.name') }}
</x-mail::message>

