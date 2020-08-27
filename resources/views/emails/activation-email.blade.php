@component('mail::message')
# Activacion de cuenta

Sigue este link para activar la cuenta

@component('mail::button', ['url' => route('activation', $user->token)])
Activa tu cuenta
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
