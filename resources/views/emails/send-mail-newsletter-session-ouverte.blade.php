@component('mail::message')

<h2>Bonjour cher(s) abonné(e) </h2>
<p> Nous vous invitons à consulter le lancement notre session #{{ $data['id'] }} en cliquant <a href="http://127.0.0.1:8000/session-ouverte/{{ $data['id'] }}/{{ $formation['slug'] }}">ici</a></p>

Cordialement !<br>
{{ config('app.name') }}
@endcomponent
