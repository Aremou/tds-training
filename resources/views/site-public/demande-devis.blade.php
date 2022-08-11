@extends('layouts.master', ['title'=>'Formations | Nom-formation'])

@section('style')
<link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />


<style>
    #header {
        box-shadow: 0 0 20px 6px gray
    }

    .bread-header {
        text-decoration: none;
        color: #01674e;
    }
    h2{
        color: #01674e;
    }

    .bread-header:hover {
        color: #ea0613;
    }

    nav ol li {
        font-size: 18px;
    }
    .nav-link{
        color: #01674e !important;
        font-weight: bold;
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        color: #ea0613 !important;
    }
    legend {
        color: #ea0613;
    }
    label{
        color: #000;
    }
</style>

@endsection

@section('formation')

<section id="services" class="pt-2">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #f7f7f7">
                <li class="breadcrumb-item"><a class="bread-header" href="#">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Devis</li>
            </ol>
        </nav>
        <div class="row mt-5">
            <h2>Demandez un devis</h2>
            <p>Laissez-nous un message et notre équipe commerciale vous répondra très rapidement.
                Contactez nous par téléphone au : <span>+229 91 43 55 55 ou  +229 99 20 06 06</span></p>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('root_send_devis_formation') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="formation">Formation</label>
                            <select class="form-select form-select-lg {{ $errors->has('formation') ? 'is-invalid' : '' }}" name="formation">
                                @if ($formation != null)
                                    <option value="{{ $formation->nom }}">{{ $formation->nom }}</option>
                                @else
                                    <option value="{{ old('formation') ?? '' }}">{{ old('formation') ?? '' }}</option>
                                @endif
                               @foreach ($formations as $formation)
                                <option value="{{ $formation->nom }}">{{ $formation->nom }}</option>
                               @endforeach
                            </select>
                            <small id="ref" class="form-text text-muted"><i>Sélectionnez votre formation ou précisez votre besoin dans les commentaires</i></small>
                            {!! $errors->first('formation', '<p class="text-danger">:message</p>') !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="border border-dark p-3">
                                    <legend  class="float-none w-auto p-2">Précisions sur la formation</legend>
                                        <div class="form-group">
                                            <label for="">Nombre de personne à former</label>
                                            <input class="form-control {{ $errors->has('nbr_personne') ? 'is-invalid' : '' }}" type="number" name="nbr_personne" value="1" min="1">
                                            {!! $errors->first('nbr_personne', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="">Renseignement</label>
                                            <textarea name="" id="" cols="30" rows="10" class="form-control {{ $errors->has('renseignement') ? 'is-invalid' : '' }}" name="renseignement"></textarea>
                                            <small id="ref" class="form-text text-muted"><i>Précisez le type, le lieu de formation ainsi que toutes informations que vous jugerez utiles à votre demande.</i></small>
                                            {!! $errors->first('renseignement', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                 </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="border border-dark p-3">
                                    <legend  class="float-none w-auto p-2">Vos coordonnées</legend>
                                        <div class="form-group">
                                            <label for="">Mail</label>
                                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" value="{{ old('email') ?? '' }}">
                                            {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="d-block mb-3">Civilité</label>
                                            <div class="form-check form-check-inline {{ $errors->has('civilite') ? 'is-invalid' : '' }}">
                                                <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="Mr" {{ old('civilite') == 'Mr' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio1">Monsieur</label>
                                            </div>
                                            <div class="form-check form-check-inline {{ $errors->has('civilite') ? 'is-invalid' : '' }}">
                                                <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="Mme" {{ old('civilite') == 'Mme' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio2">Madame</label>
                                            </div>
                                            {!! $errors->first('civilite', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="">Prénom</label>
                                            <input id="" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" type="text" name="prenom" value="{{ old('prenom') ?? '' }}">
                                            {!! $errors->first('prenom', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nom</label>
                                            <input id="" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" type="text" name="nom" value="{{ old('nom') ?? '' }}">
                                            {!! $errors->first('nom', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="form-group">
                                            <label for="">Téléphone</label>
                                            <input id="" class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}" type="text" name="telephone" value="{{ old('telephone') ?? '' }}">
                                            {!! $errors->first('telephone', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                 </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="border border-dark p-3">
                                    <legend  class="float-none w-auto p-2">Vous êtes</legend>
                                    <div class="form-group {{ $errors->has('statut') ? 'is-invalid' : '' }}">
                                        <div class="form-check form-check-inline {{ $errors->has('statut') ? 'is-invalid' : '' }}">
                                            <input class="form-check-input" type="radio" name="statut" id="particulier" value="particulier" {{ old('statut') == 'particulier' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="particulier">Un particulier</label>
                                        </div>
                                        <div class="form-check form-check-inline {{ $errors->has('statut') ? 'is-invalid' : '' }}">
                                            <input class="form-check-input" type="radio" name="statut" id="entreprise" value="entreprise" {{ old('statut') == 'entreprise' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="entreprise">Une entreprise</label>
                                        </div>
                                        {!! $errors->first('statut', '<p class="text-danger">:message</p>') !!}
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Société</label>
                                            <input id="" class="form-control {{ $errors->has('societe') ? 'is-invalid' : '' }}" type="text" name="societe" value="{{ old('societe') ?? '' }}">
                                            {!! $errors->first('societe', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Fonction</label>
                                            <input id="" class="form-control {{ $errors->has('fonction') ? 'is-invalid' : '' }}" type="text" name="fonction" value="{{ old('fonction') ?? '' }}">
                                            {!! $errors->first('fonction', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Code postal</label>
                                            <input id="" class="form-control {{ $errors->has('code_postal') ? 'is-invalid' : '' }}" type="text" name="code_postal" value="{{ old('code_postal') ?? '' }}">
                                            {!! $errors->first('code_postal', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Ville</label>
                                            <input id="" class="form-control {{ $errors->has('ville') ? 'is-invalid' : '' }}" type="text" name="ville" value="{{ old('ville') ?? '' }}">
                                            {!! $errors->first('ville', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Pays</label>
                                            <input id="" class="form-control {{ $errors->has('pays') ? 'is-invalid' : '' }}" type="text" name="pays" value="{{ old('pays') ?? '' }}">
                                            {!! $errors->first('pays', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <button type="submit" class="btn text-uppercase float-end mt-5 py-3 px-2" style="background:#01674e; color:#fff" type="button">Demander un devis</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{asset('js/bootstrap.min.js ') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script>
    $(document).ready(function(){
        $("#ex1 a").click(function(e){
            e.preventDefault();
            $(this).tab("show");
        });
    });

    $( 'select' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
    } );
</script>
@endsection
