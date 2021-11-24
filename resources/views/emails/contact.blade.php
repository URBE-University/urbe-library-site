@component('mail::message')
# New Web Inquiry

**Name**: {{$contact->name}}

**Phone**: {{$contact->phone}}

**E-mail**: {{$contact->email}}

**Message**: {{$contact->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
