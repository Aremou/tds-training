@component('mail::message')

<h2>Bienvenue <span >{{ $data['civilite'] }}</span> {{ $data['nom'] }} </h2>
<p> Votre inscription à bien été reçue</p>

Cordialement !<br>
{{ config('app.name') }}
@endcomponent
