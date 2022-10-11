@extends('layouts.master', ['title'=>'Nos Formations'])


@section('style')
<link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet">

<style>
    .bg-1 {
        background: linear-gradient(rgba(1, 103, 78, 0.4), rgba(1, 103, 78, 0.4)), url('img/formation.jpg')no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
    }

    .card-title-formation{
        display: inline-block;
        vertical-align: middle;
        border: none;
        padding-top: 45px;
        padding-bottom: 10px;
        margin: auto;
        height: auto;
        font-size: 17px
    }
    .durer{
        display: block;
        width: 100%;
        text-align:right;
        line-height: 1;
        margin-top: 10%;
        color: #fff;
        font-weight: bolder;
        font-size: 18px;
    }

    @media (min-width: 576px) {
        .card-formation{
            margin-bottom: 15px;
        }
    }
    @media (min-width: 768px) {
        .card-formation{
            margin-bottom: 15px;
        }
    }
    @media (min-width: 992px) {
        .card-formation{
            margin-bottom: 15px;
        }
    }
    @media (min-width: 1200px) {
        .card-formation{
            width: 253px;
            margin: 0px 8px;
            margin-bottom: 15px;
        }
    }
    .btn_plus{
        background-color: #02674e;
        color: white;
        font-size: 12px;
    }

    .btn_plus:hover{
        background-color: #ea0613;
        color: #fff;
        font-size: 12px;
    }

    .accordion-button:not(.collapsed) {
        color: #000 !important;
        background-color: #fff !important;
    }
    .card-body{
        padding: 0rem 1rem;
        padding-top: 10px;

    }
    .card-formation {
        /* overflow: unset !important; */
    }
    /* .accordion .card{
    } */
    .certification{
        display:inline-block;
    }
    p {
    display: inline-block;
    margin-block-start: 1em;
    /* margin-block-end: 0em; */
    /* margin-inline-start: 0px; */
    margin-inline-end: 0px;
    }

</style>

@endsection

@section('slide')

<section class="" style="height: 50vh;">
    <div class="d-flex bg-1">
        <div class=" m-auto">
            <span class="text-center fw-bold" style="font-size: 46px; color: #fff">Nos offres de formation
                professionnelle</span>
        </div>
    </div>
</section>
@endsection

@section('formation')

<section id="services">
    <div class="container">
        <p class="text-justify">
            TECHNODATA ACADEMIA est un département de TECHNODATA dans le domaine de la formation continue en Informatique et Télécoms. Nous mettons à votre disposition notre savoir-faire pour vous aider dans vos projets de formation.
            Entourés de formateurs certifiés, TECHNODATA ACADEMIA vous propose une gamme de formations en informatique dans tous les domaines et pour tous les niveaux (débutants-experts-chefs d'entreprise-ingénieurs ou techniciens système...).
            Elle organise des formations de tous types: présentiel, virtuel et hybride, et vous accompagne jusqu'à l'obtention de vos certifications qui vous permettront d'être concurents sur le marché de l'emploi.
        </p>

        <div class="row">
            <div class="accordion" id="accordionPanelsStayOpenExample">
               @foreach ($categories as $categorie)
                <div class="accordion-item mt-4 border-0">
                    <h2 class="accordion-header" style="border-left: 8px solid #ea0613 !important"
                        id="panelsStayOpen-heading-{{ $categorie->id }}">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse-{{ $categorie->id }}" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapse-{{ $categorie->id }}">
                            <div>
                                <span class="font-weight-bold" style="color: #01674e"> {{ $categorie->nom }} </span><br>
                                <p class="description">{{ Str::substr($categorie->description, 0, 200) }} {{ Str::length($categorie->description) > 200 ? '...' : '' }} </p>
                            </div>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse-{{ $categorie->id }}" style="background-color: #f7f7f7"
                        class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading-{{ $categorie->id }}">
                        <div class="accordion-body">
                            <div class="row">
                                    @foreach (formations($categorie->id) as $formation)
                                        <div class="card border rounded col-md-3 p-0 mb-3 card-formation" style="height: 335px;">
                                            <div class="card-header" style="background: linear-gradient(rgba(1, 103, 78, 0.4), rgba(1, 103, 78, 0.4)),url('img/laureat.png')no-repeat;
                                                -webkit-background-size: cover;
                                                -moz-background-size: cover;
                                                -o-background-size: cover;
                                                background-size: cover; height: 150px">
                                                        <h3 class="text-center fw-bold card-title-formation" style="color: #fff">{!! Str::substr($formation->nom, 0, 25) !!} {!! Str::length($formation->nom) > 25 ? '...' : '' !!}</h3>
                                                            <span class="durer">{{ $formation->duree }}</span>
                                            </div>
                                            <div class="card-body">
                                                <p class="justify-content" style="margin-block-start: 1em; display: inline-block;     margin-block-end: 0em;
                                                ">
                                                    <span class="font-weight-bold h6">Niveau : </span>{{ $formation->niveau }}<br>
                                                    <span class="font-weight-bold h6" style="margin-top:0;">Certification :</span> {{ Str::substr($formation->certification, 0, 23) }} {{ Str::length($formation->certification) > 23 ? '...' : '' }} <br>

                                                    {{-- <?php
                                                    echo $formation->certification;

                                                    ?>
                                                    <br> --}}
                                                    <span class="font-weight-bold h6">Référence :</span> {{ $formation->reference }}
                                                </p>
                                                <a href="{{ route('root_detail_formations', [$categorie->slug, $formation->slug])}}" class="btn rounded-pill btn_plus float-right mt-3">En savoir plus <i
                                                    class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/bootstrap.min.js ') }}"></script>

@endsection
