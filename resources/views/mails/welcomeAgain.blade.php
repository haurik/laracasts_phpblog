@component('mail::message')
# Introduction

    Hi {{ $user->name }}, thanks for registration. I hope you like it.

@component('mail::button', ['url' => ''])
    Start browsing
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
