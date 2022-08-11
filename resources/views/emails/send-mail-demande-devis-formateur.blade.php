@component('mail::message')

<h6>Nouvelle demande de devis avec les informations suivantes </h6>

<p style="margin: 0px !important;"><b>Formation:</b> {{ $data['formation'] }}</p>
<p style="margin: 0px !important;"><b>Participants:</b> {{ $data['nbr_personne'] }}</p>
<p style="margin: 0px !important;"><b>Commentaire:</b> {{ $data['renseignement'] }}</p>

<h4 style="margin-top: 10px !important;"><u>Personne à contacter</u></h4>
<p style="margin: 0px !important;"><b>Civilité:</b> {{ $data['civilite'] }}</p>
<p style="margin: 0px !important;"><b>Prénom:</b> {{ $data['prenom'] }}</p>
<p style="margin: 0px !important;"><b>Nom:</b> {{ $data['nom'] }}</p>
<p style="margin: 0px !important;"><b>Mail:</b> {{ $data['email'] }}</p>
<p style="margin: 0px !important;"><b>Téléphone:</b> {{ $data['telephone'] }}</p>

<p style="margin: 0px !important;"><b>Type Personne :</b> {{ $data['statut'] }}</p>
<p style="margin: 0px !important;"><b>Société:</b> {{ $data['societe'] }}</p>
<p style="margin: 0px !important;"><b>Fonction:</b> {{ $data['fonction'] }}</p>
<p style="margin: 0px !important;"><b>Code Postal:</b> {{ $data['code_postal'] }}</p>
<p style="margin: 0px !important;"><b>Ville:</b> {{ $data['ville'] }}</p>
<p style="margin-bottom: 25px !important;"><b>Pays:</b> {{ $data['pays'] }}</p>

Cordialement,<br>

{{ config('app.name') }}
@endcomponent
