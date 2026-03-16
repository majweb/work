<x-mail::message>
# {{ __('Invoice Correction') }} {{ $correction->number }}

{{ __('Hello') }},

{{ __('A correction for invoice :number has been issued.', ['number' => $correction->invoice->number . '/' . $correction->invoice->month . '/' . $correction->invoice->year]) }}

{{ __('Reason for correction:') }}
{{ $correction->reason ?: __('No reason provided') }}

{{ __('You can find the correction PDF in the attachment or on your account in the finance section.') }}

{{ __('Thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
