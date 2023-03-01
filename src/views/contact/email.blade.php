@component('mail::message')
# Introduction

There is a new query from {{$user_name}}.
{{$content}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
