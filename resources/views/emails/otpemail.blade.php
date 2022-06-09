@component('mail::message')
# Verification Account

## Here’s your security code:
# {{$token}}

Hello user#343724823!

We’ve received a security request from your Account. Please use the code above to verify ownership of your account.

Note: The code will expire in 10 minutes, so please verify soon!


@component('mail::button', ['url' => ''])
Back to site
@endcomponent

Enjoy your adventures!<br>
{{ config('app.name') }}
@endcomponent
