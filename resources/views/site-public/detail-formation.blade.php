@extends('layouts.master', ['title'=>'Formations | ' . $formation->nom ])

@section('style')
<link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet">

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
</style>

@endsection

@section('formation')

<section id="services" class="pt-2">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #f7f7f7">
                <li class="breadcrumb-item"><a class="bread-header" href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a class="bread-header" href="#">{{ $formation->categorie->nom }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $formation->nom }}</li>
            </ol>
        </nav>
        <div class="row">
            <h2>{{ $formation->nom }}</h2>
            <div class="row">
                <div class="col-md-8">
                    <p class="text-justify">
                        {!! $formation->description !!}
                    </p>
                    <div class="mt-5">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#objectif">Objectifs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#public">Public</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#prerequis">Prérequis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#programme">Programmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#point-fort">Acquis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#certification">Certification</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 bg-white">
                            <div class="tab-pane container active text-justify" id="objectif">
                                {!! $formation->objectif !!}
                            </div>
                            <div class="tab-pane container fade text-justify" id="public">
                                {!! $formation->public !!}
                            </div>
                            <div class="tab-pane container fade text-justify" id="prerequis">
                                {!! $formation->prerequis !!}
                            </div>
                            <div class="tab-pane container fade text-justify" id="programme">
                                {!! $formation->programme !!}
                            </div>
                            <div class="tab-pane container fade text-justify" id="point-fort">
                                {!! $formation->points_forts !!}
                            </div>
                            <div class="tab-pane container fade text-justify" id="certification">
                                {!! $formation->certification !!}
                            </div>
                        </div>
                        <span class="float-right">Dernière mise à jour: {{ $formation->updated_at }}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row border p-1">
                        <ul class="list-unstyled ">
                            <li><strong class="d-inline-block">Référence : </strong> {{ $formation->reference }}</li>
                            <li><strong class="d-inline-block">Durée  : </strong> {{ $formation->duree }}</li>
                            <li><strong class="d-inline-block">Lieu  : </strong> {{ $formation->lieu }}</li>
                        </ul>
                        <form action="">
                            <button type="button" class="btn m-1 w-100" style="background: #01674e; color:#fff">Demande d'inscription</button>
                            <a href="{{ route('root_devis_formation', $formation->slug) }}">
                                <button type="button" class="btn m-1 w-100" style="background: #01674e; color:#fff">Demande de devis</button>
                            </a>
                        </form>
                        <p class="my-3">
                            <b> Type de formation :</b> <br>{{ $formation->type_formation }}
                        </p>
                        <a href="{{ route('root_delocalisation') }}">
                            <button type="button" class="btn m-1 w-100" style="background: #01674e; color:#fff">Contacter notre service académique</button>
                        </a>
                    </div>
                    <div class="row border p-1 my-4">
                        <h4>Des questions ?</h4>
                        <p>
                            Contactez notre service pédagogique et technique au
                        </p>
                        <h4 style="color: #ea0613;"><i class="fa fa-phone"> +229 91 43 55 55</i></h4>
                        <h4 style="color: #ea0613;"><i class="fa fa-phone"> +229 99 20 06 06</i></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{asset('js/bootstrap.min.js ') }}"></script>
<script>
    $(document).ready(function(){
        $("#ex1 a").click(function(e){
            e.preventDefault();
            $(this).tab("show");
        });
    });
</script>
@endsection
