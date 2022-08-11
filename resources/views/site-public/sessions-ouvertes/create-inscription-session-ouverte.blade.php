@extends('layouts/master', ['title'=>$session_ouverte->formation->nom . ' | inscription'])

@section('style')
<link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


<style>
    #header {
        box-shadow: 0 0 20px 6px gray
    }

    .bread-header {
        text-decoration: none;
        color: #01674e;
    }

    h2 {
        color: #01674e;
    }

    .bread-header:hover {
        color: #ea0613;
    }

    nav ol li {
        font-size: 18px;
    }

    .nav-link {
        color: #01674e !important;
        font-weight: bold;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #ea0613 !important;
    }

    legend {
        color: #ea0613;
    }

    label {
        color: #000;
    }
    .iti{
        display : block !important;
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
                <li class="breadcrumb-item"><a class="bread-header" href="#">Session #{{ $session_ouverte->id }}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{ $session_ouverte->formation->nom }}</li>
                <li class="breadcrumb-item active" aria-current="page">Inscription</li>
            </ol>
        </nav>
        <div class="row mt-5">
            <h2>Inscrivez-vous</h2>
            <p>Laissez-nous un message et notre équipe commerciale vous répondra très rapidement.
                Contactez nous par téléphone au : <span>+229 91 43 55 55 ou +229 99 20 06 06</span></p>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('root_store_inscription_session_ouverte', [$session_ouverte->id, $session_ouverte->formation->nom]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="border border-dark p-3">
                                    <legend class="float-none w-auto p-2">Vos coordonnées</legend>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="" class="d-block mb-3">Civilité</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input {{ $errors->has('civilite') ? 'is-invalid' : '' }}" type="radio" name="civilite"
                                                    id="inlineRadio1" value="Mr" checked="checked">
                                                <label class="form-check-label" for="inlineRadio1">Monsieur</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input {{ $errors->has('civilite') ? 'is-invalid' : '' }}" type="radio" name="civilite"
                                                    id="inlineRadio2" value="Mme">
                                                <label class="form-check-label" for="inlineRadio2">Madame</label>
                                            </div>
                                        </div>
                                        {!! $errors->first('civilite', '<p class="text-danger">:message</p>') !!}

                                        <div class="col-md-6 form-group">
                                            <label>Nom</label>
                                            <input class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="" name="nom">
                                            {!! $errors->first('nom', '<p class="text-danger">:message</p>') !!}

                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Prénom</label>
                                            <input class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="" name="prenom">
                                            {!! $errors->first('prenom', '<p class="text-danger">:message</p>') !!}
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>E-mail</label>
                                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="" name="email">
                                            {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Téléphone</label>
                                            <input
                                                class="form-control {{ $errors->has('telephone') ? 'is-invalid' : '' }}"
                                                value="" type="tel" placeholder="" name="telephone" id="phone">
                                            {!! $errors->first('telephone', '<p class="text-danger">:message</p>') !!}
                                            <div class="alert alert-info" style="display: none;"></div>
                                            <div class="alert alert-error" style="display: none;"></div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Pays</label>
                                            <input
                                                class="form-control {{ $errors->has('pays') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="" name="pays">
                                            {!! $errors->first('pays', '<p class="text-danger">:message</p>') !!}
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Ville</label>
                                            <input class="form-control {{ $errors->has('ville') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="" name="ville">
                                            {!! $errors->first('ville', '<p class="text-danger">:message</p>') !!}
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Code postal</label>
                                            <input
                                                class="form-control {{ $errors->has('code_postal') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="123" name="code_postal">
                                            {!! $errors->first('code_postal', '<p class="text-danger">:message</p>') !!}
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Profession</label>
                                            <input
                                                class="form-control {{ $errors->has('profession') ? 'is-invalid' : '' }}"
                                                value="" type="text" placeholder="" name="profession">
                                            {!! $errors->first('profession', '<p class="text-danger">:message</p>') !!}
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <button class="btn text-uppercase float-end mt-5 py-3 px-2"
                            style="background:#01674e; color:#fff" type="submit">Soumettre</button>
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
    $(document).ready(function() {
        $("#ex1 a").click(function(e) {
            e.preventDefault();
            $(this).tab("show");
        });
    });
    $('select').select2({
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
        placeholder: $(this).data('placeholder'),
    });


    function getIp(callback) {
        fetch('https://ipinfo.io/json?token=9299d29dc5c97f', { headers: { 'Accept': 'application/json' }})
        .then((resp) => resp.json())
        .catch(() => {
            return {
            country: 'us',
            };
        })
        .then((resp) => callback(resp.country));
    }

   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "auto",
        geoIpLookup: getIp,
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });


</script>

@endsection
