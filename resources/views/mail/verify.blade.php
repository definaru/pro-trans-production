@component('mail::message')
# Introduction

Спасибо за выбор нашего сервиса.
Ваш шестизначный код для подтверждения 
<br /><b>{{$pin}}</b>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
