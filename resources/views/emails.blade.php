@component('mail::message')
# A new contact from your page!

Author: <strong> {{ $contact->fullName }} <strong>

Message : <br>
{!! $contact->message !!}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
