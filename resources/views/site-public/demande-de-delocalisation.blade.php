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
    legend{
        color: #ea0613;
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
                <li class="breadcrumb-item active" aria-current="page">Demande de devis sur mesure</li>
            </ol>
        </nav>
        <div class="row mt-5">
            <h2>Demandez un devis sur mesure</h2>
            <p>Laissez-nous un message et notre équipe commerciale vous répondra très rapidement.
                Vous pouvez également nous contacter par téléphone, du lundi au vendredi de 8h00 à 18h30 au : <span>+229 91 43 55 55</span></p>
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="border border-dark p-3">
                                    <legend  class="float-none w-auto p-2">Vos coordonnées</legend>
                                        <div class="form-group">
                                            <label for="" class="d-block mb-3">Civilité</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked">
                                                <label class="form-check-label" for="inlineRadio1">Monsieur</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Madame</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <label for="">Prénom</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Nom</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Email</label>
                                                <input id="" class="form-control" type="mail" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Téléphone</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Société (uniquement pour les entreprises)</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Code postal</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Ville</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label for="">Pays</label>
                                                <input id="" class="form-control" type="text" name="">
                                            </div>
                                        </div>
                                </fieldset>
                            </div>
                            <div class="col-md-12 mt-4">
                                <fieldset class="border border-dark p-3">
                                    <legend  class="float-none w-auto p-2">Votre besoin</legend>
                                        <div class="form-group">
                                            <label for="">Lieu souhaité</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Dates souhaitées</label>
                                            <input class="form-control" type="date">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nombre de personne à former</label>
                                            <input class="form-control" type="number" name="" value="1">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description de votre projet (objectifs, connaissance du sujet, thème à renforcer/supprimer, profil des participants...)</label>
                                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                 </fieldset>
                            </div>
                        </div>
                        <button class="btn text-uppercase float-end mt-5 py-3 px-2" style="background:#01674e; color:#fff" type="button">Envoyer ma demande</button>
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
