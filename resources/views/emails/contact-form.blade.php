@component('mail::message')
# Nouveau message de contact

**De:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Téléphone:** {{ $data['phone'] }}  
**Sujet:** {{ $data['subject'] }}

**Message:**  
{{ $data['message'] }}

Merci,<br>
{{ config('app.name') }}
@endcomponent
