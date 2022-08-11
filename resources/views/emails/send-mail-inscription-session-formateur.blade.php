@component('mail::message')

<h2>Nouvelle inscription à la formation de Microsoft Certified Solutions Expert avec les informations suivantes </h2>

<span><b><u>Civilité:</u></b></span> <span class="text-capitalize">{{ $data['civilite'] }}</span><br>
<span><b><u>Nom:</u></b></span> {{ $data['nom'] }}<br>
<span><b><u>Prenom:</u></b></span> {{ $data['prenom'] }}<br>
<span><b><u>Email:</u></b></span> {{ $data['email'] }}<br>
<span><b><u>Téléphone:</u></b></span> {{ $data['telephone'] }}<br>
<span><b><u>Pays:</u></b></span> {{ $data['pays'] }}<br>
<span><b><u>Ville:</u></b></span> {{ $data['ville'] }}<br>
<span><b><u>Code postal:</u></b></span> {{ $data['code_postal'] }}<br>
<span><b><u>Profession:</u></b></span> {{ $data['profession'] }}<br>

Cordialement !<br>
{{ config('app.name') }}

@endcomponent
