<x-mail::message>
# {{ __('CorrectionMail-subject') }} {{ $correction->number }}

{{ __('CorrectionMail-hello') }},

{{ __('CorrectionMail-line1', ['number' => $correction->invoice->number . '/' . $correction->invoice->month . '/' . $correction->invoice->year]) }}

**{{ __('CorrectionMail-reason') }}**
{{ $correction->reason ?: __('CorrectionMail-no-reason') }}

{{ __('CorrectionMail-line2') }}

{{ __('CorrectionMail-thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
