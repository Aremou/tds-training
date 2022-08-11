@component('mail::message')

Bonjour {{ $data['prenom'] . " " . $data['nom'] }},

Nous vous remercions d'avoir sollicité TDS pour votre formation.
L'un de nos conseillers va vous recontacter très rapidement pour vous communiquer les informations souhaitées.

<h2>Pour rappel veuillez trouver ci-dessous votre demande :</h2>

<p style="margin: 0px !important;"><b>Formation:</b> {{ $data['formation'] }}</p>
<p style="margin: 0px !important;"><b>Participants:</b> {{ $data['nbr_personne'] }}</p>
<p style="margin: 0px !important;"><b>Commentaire:</b> {{ $data['renseignement'] }}</p>
<br>
<h2 style="margin: 0px !important;"><u>Personne à contacter</u></h2>

<p style="margin: 0px !important;"><b>Prénom:</b> {{ $data['prenom'] }}</p>
<p style="margin: 0px !important;"><b>Nom:</b> {{ $data['nom'] }}</p>
<p style="margin: 0px !important;"><b>Mail:</b> {{ $data['email'] }}</p>
<p style="margin: 0px !important;"><b>Téléphone:</b> {{ $data['telephone'] }}</p>
<p style="margin: 0px !important;"><b>Société:</b> {{ $data['societe'] }}</p>
<p style="margin: 0px !important;"><b>Fonction:</b> {{ $data['fonction'] }}</p>
<p style="margin: 0px !important;"><b>Pays:</b> {{ $data['pays'] }}</p>

<br>
Cordialement,<br>


{{ config('app.name') }}
@endcomponent
