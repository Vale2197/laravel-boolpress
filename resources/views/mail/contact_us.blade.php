@component('mail::message')

<h2>
    {{$contact->name}}
</h2>

<h3>
    {{$contact->subject}}
</h1>

<p>
    {{$contact->message}}
</p>

@component('mail::button', ['url' => $url])
View
@endcomponent

Thanks, we receive your mail<br>
{{ config('app.name') }}
@endcomponent
