@extends('layouts/master',['title'=>'Bienvenue sur le site de formation de TDS'])

@section('style')

<style>
    .bg-1 {
        background: url('img/img-1.png')no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%
    }

    #slide-p-1 {
        /* height: 40px; */
        white-space: nowrap;
        overflow: hidden;
        /* font-family: 'Source Code Pro', monospace; */
        font-size: 45px;
        /* color: rgba(255, 255, 255, .70); */
        position: relative;
        color: black;
    }

    #slide-b-1 {
        border-bottom: solid 3px rgba(0, 255, 0, .75);
        position: absolute;
        right: -7px;
        width: 20px;
    }

    /* Animation */
    #slide-p-1 {
        animation: animated-text 2s steps(30, end) 1s 1 normal both
    }

    #slide-b-1 {
        animation: animated-cursor 600ms steps(30, end) infinite;
    }

    #slide-p-2 {
        /* height: 40px; */
        white-space: nowrap;
        overflow: hidden;
        /* font-family: 'Source Code Pro', monospace; */
        font-size: 25px;
        /* color: rgba(255, 255, 255, .70); */
        position: relative;
        color: black;
    }

    #slide-b-2 {
        border-bottom: solid 3px rgba(0, 255, 0, .75);
        position: absolute;
        right: -7px;
        width: 20px;
    }

    /* Animation */
    #slide-p-2 {
        animation: animated-text 2s steps(30, end) 3s 1 normal both
    }

    #slide-b-2 {
        animation: animated-cursor 600ms steps(30, end) infinite;
    }


    #slide-p-3 {
        /* height: 40px; */
        white-space: nowrap;
        overflow: hidden;
        /* font-family: 'Source Code Pro', monospace; */
        font-size: 25px;
        /* color: rgba(255, 255, 255, .70); */
        position: relative;
        color: black;
    }

    #slide-b-3 {
        border-bottom: solid 3px rgba(0, 255, 0, .75);
        position: absolute;
        right: -7px;
        width: 20px;
    }

    /* Animation */
    #slide-p-3 {
        animation: animated-text 2s steps(30, end) 5s 1 normal both
    }

    #slide-b-3 {
        animation: animated-cursor 600ms steps(30, end) infinite;
    }


    /* text animation */
    @keyframes animated-text {
        from {
            width: 0;
        }

        to {
            width: 480px;
        }
    }

    /* cursor animations */
    @keyframes animated-cursor {
        from {
            border-bottom-color: rgba(0, 255, 0, .75);
        }

        to {
            border-bottom-color: transparent;
        }
    }

    .btn-catalogue {
        background-color: #ea0613;
        color: #fff;
        border-radius: 50rem;
    }

    .btn-catalogue:hover {
        background-color: #01674e;
        color: #fff;
        border-radius: 50rem;
    }

    @media (min-width: 992px) {
        .bg-2 {
            display: flex;
            padding: 2rem;
            flex-direction: column;
            justify-content: space-between;
        }
    }

    @media (min-width: 576px) {
        .bg-2 {
            max-width: 540px;
        }
    }

    @media (min-width: 768px) {
        .bg-2 {
            max-width: 720px;
        }
    }

    @media (min-width: 992px) {
        .bg-2 {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .bg-2 {
            max-width: 1140px;
        }
    }

    .hr-top-formation {
        width: 64px;
        border-bottom: 4px solid #01674e;
        margin: auto;
        margin-bottom: 5px;
    }

    .hr-domaine-formation {
        /* width: 64px; */
        border-left: 4px solid #01674e;
        /* margin: auto;
        margin-bottom: 5px; */
    }
</style>

@endsection
@section('slide')

<section class="" style="height: 87vh;">
    <div class="d-flex bg-1">
        <div class="bg-2 container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div id="slide-p-1"> <span class="font-weight-bold" style="color: #ea0613; font-size: 45px"> Se
                            former</span> <span class="font-weight-bold" style="color: #000; font-size: 45px">en
                            liberté</span>
                        <div id="slide-b-1"></div>
                    </div>
                    <div id="slide-p-2">
                        Découvrez nos formations pour
                        <div id="slide-b-2"></div>
                    </div>
                    <div id="slide-p-3">
                        apprendre, progresser et réussir
                        <div id="slide-b-3"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h4 class="text-dark">Chercher une formation</h4>
                </div>
                <div class="col-md-6">
                    @livewire('search')
                </div>
                <div class="col-md-6">
                    <a href="{{ route('root_formations') }}" class="btn btn-catalogue btn-lg px-3" style="font-size: 18px">
                        Explorer notre catalogue <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div>
            </div>
</section>

@endsection
@section('top-formation')
<section id="about">
    <div class="container">
        <header class="section-header">
            <h3>Top formations</h3>
        </header>

        <div class="row about-cols">
            @foreach ($last_formations as $formation)
            <div class="col-md-3 wow fadeInUp">
                <div class="about-col" style="height: 450px">
                    <div class="img">
                        <img src="{{ asset('img/img-2.png') }}" alt="" class="img-fluid" style="height: 200px">
                        <div class="icon"><span class="text-white">{{ $formation->duree }}</span></div>
                    </div>
                    <h2 class="title"><a
                            href="{{ route('root_detail_formations',[$formation->categorie->slug, $formation->slug]) }}">{{ $formation->nom }}</a>
                    </h2>
                    <div class="hr-top-formation my-3"></div>
                    <p class="text-justify">
                        <span class="font-weight-bold h5">Niveau : </span> <span class="h6">{{ $formation->niveau }}
                        </span><br>
                        <span class="font-weight-bold h6">Certification :</span> <span class="h6">{!!
                            $formation->certification !!}</span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection

@section('domaine-formation')
<section id="services">
    <div class="container">

        <header class="section-header wow fadeInUp ">
            <h3>Domaines de formation</h3>
        </header>

        <div class="row mt-4">
            @php
            $i = 1.4;
            @endphp
            @foreach ($categories as $categorie)
            <div class="col-lg-3 col-md-6 box wow bounceInUp"
                style="height: 87px; border-left: 8px solid #01674e !important" data-wow-duration="{{ $i }}s">
                <h4 class="title"><a href="{{ route('root_formations') }}">{{ $categorie->nom }}</a></h4>
                <p class="description">{{ Str::substr($categorie->description, 0, 70) }}
                    {{ Str::length($categorie->description) > 70 ? '...' : '' }} </p>
            </div>
            @php
            $i = $i + 0.1;
            @endphp
            @endforeach
        </div>
        <div class="row">
            <div class="m-auto">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</section>
@endsection

@section('call-to-action')
<section id="call-to-action" class="wow fadeIn">
    <div class="container text-center h4">
        <p>Notre expertise s'appuie sur un catalogue assez vaste de formations dans les domaines du digital, de la
            gestion des SI, du management RH ou encore du marketing et des normes de qualité ISO. À défaut, nous pouvons
            faire appel à nos formateurs experts pour développer des formations personnalisées.</p>
        <a class="cta-btn" href="{{ route('root_devis') }}">Demander un devis <i class="fa fa-paper-plane-o"></i></a>
    </div>
</section>
@endsection
@section('facts')
<section id="facts" class="wow fadeIn">
    <div class="container">
        {{--
        <header class="section-header">
            <h3>STATISTIQUES RÉUSSIES À NOTRE SUJET</h3>
            <p>CE QUE NOUS AVONS ACCOMPLI JUSQU’À PRÉSENT</p>
        </header> --}}

        <div class="row counters mb-5">

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" class="d-inline-block">300</span>
                <span class="d-inline-block">+</span>
                <p>Formations Professionnelles </p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" class="d-inline-block">500</span>
                <span class="d-inline-block">+</span>
                <p>Sessions déjà ouvertes</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" class="d-inline-block">100 </span>
                <span class="d-inline-block">%</span>
                <p>De participants satisfaits ou très satisfaits de nos formations</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" class="d-inline-block">100</span>
                <span class="d-inline-block">+</span>
                <p>Formateurs experts</p>
            </div>

        </div>

        <div class="owl-carousel clients-carousel">
            <img src="img/clients/soneb.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/segub.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/galerie.png" alt="" style="width: 185px; height:100px">
            <img src="img/clients/logo-Js-com.png" alt="" style="width: 185px; height:100px">
            <img src="img/clients/maep.png" alt="" style="width: 185px; height:100px">
            <img src="img/clients/oti.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/plan.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/Anlc.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/dgtl-world.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/poste.jpg" alt="" style="width: 185px; height:100px">
            <img src="img/clients/nsia.jpg" alt="" style="width: 185px; height:100px">
        </div>

    </div>
</section>

@endsection
