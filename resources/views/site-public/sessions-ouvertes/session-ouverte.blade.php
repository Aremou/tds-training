@extends('layouts.master', ['title'=>'Nos sessions ouvertes'])


@section('style')
<link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet">

<style>
    .bg-1 {
        background: linear-gradient(rgba(1, 103, 78, 0.4), rgba(1, 103, 78, 0.4)), url('img/session-ouverte.jpg')no-repeat;
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
        margin-top: 22px;
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

    .card-title-session-ouverte{
        vertical-align: middle;
        border: none;
        padding-top: 56px;
        padding-bottom: 10px;
        font-size: 17px
    }

</style>

@endsection

@section('slide')

<section class="" style="height: 50vh;">
    <div class="d-flex bg-1">
        <div class=" m-auto">
            <span class="text-center fw-bold" style="font-size: 46px; color: #fff">Nos sessions ouvertes</span>
        </div>
    </div>
</section>
@endsection

@section('formation')

<section id="services">
    <div class="container">
        <p class="text-justify">
            {{-- <span class="float-right font-weight-bold mb-2" style="color:#02674e;">Sessions ouvertes</span> --}}
        </p>

        <h3 class=" text-dark font-weight-bold " style="border-left : 4px solid #02674e; padding-left:10px">Sessions ouvertes</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            @if ($session_ouvertes_en_cours->count() > 0)
                @foreach($session_ouvertes_en_cours as $session_ouverte_en_cours)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-header" style="background: linear-gradient(rgba(1, 103, 78, 0.4), rgba(1, 103, 78, 0.4)),url('img/formations.jpg')no-repeat;
                                -webkit-background-size: cover;
                                -moz-background-size: cover;
                                -o-background-size: cover;
                                background-size: cover; height: 150px">
                                        <h3 class="text-center fw-bold card-title-session-ouverte" style="color: #fff">Session #{{ $session_ouverte_en_cours->id }} | {{ $session_ouverte_en_cours->formation->categorie->nom }}</h3>

                            </div>                            <div class="card-body">
                                <a href=""><span class="badge text-white p-2" style="background: #02674e">{{ $session_ouverte_en_cours->formation->categorie->nom }}</span></a>
                                <a href="{{ route('root_show_session_ouverte', [$session_ouverte_en_cours->id, $session_ouverte_en_cours->formation->slug]) }}" class="text-dark">
                                    <p class="card-text">{{ $session_ouverte_en_cours->formation->nom }}</p>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Date de cloture : <i> {{ $session_ouverte_en_cours->date_fin }}</i></small>

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="m-auto mt-5">Pas de session ouverte</h3>
            @endif
        </div>
        <div class="row">
            <div class="m-auto">
                {{ $session_ouvertes_en_cours->links() }}
            </div>
        </div>
        <h3 class=" text-dark font-weight-bold mt-5" style="border-left : 4px solid #02674e; padding-left:10px">Sessions passées</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
           @if ($session_ouvertes_termine->count() > 0)
                @foreach($session_ouvertes_termine as $session_ouverte_termine)
                    <div class="col-md-3 mb-4 mt-5">
                        <div class="card h-100">
                            <div class="card-header" style="background: linear-gradient(rgba(1, 103, 78, 0.4), rgba(1, 103, 78, 0.4)),url('img/formations.jpg')no-repeat;
                                -webkit-background-size: cover;
                                -moz-background-size: cover;
                                -o-background-size: cover;
                                background-size: cover; height: 150px">
                                        <h3 class="text-center fw-bold card-title-session-ouverte" style="color: #fff">Session #{{ $session_ouverte_termine->id }} | {{ $session_ouverte_termine->formation->categorie->nom }}</h3>

                            </div>
                            <div class="card-body">
                                <a href=""><span class="badge text-white p-2" style="background: #02674e">{{ $session_ouverte_termine->formation->categorie->nom }}</span></a>
                                <a href="{{ route('root_show_session_ouverte', [$session_ouverte_termine->id, $session_ouverte_termine->formation->slug]) }}" class="text-dark">
                                    <p class="card-text">{{ $session_ouverte_termine->formation->nom }}</p>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Date de cloture : <i> {{ $session_ouverte_termine->date_fin }}</i></small>

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="m-auto mt-5">Pas de session clôturée</h3>
           @endif
        </div>
        <div class="row">
            <div class="m-auto">
                {{ $session_ouvertes_termine->links() }}
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/bootstrap.min.js ') }}"></script>

@endsection
