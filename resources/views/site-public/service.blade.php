@extends('layouts.master', ['title'=>'Nos Services'])


@section('intro')

<link href="{{asset('css/bootstrap.min.css ') }}" rel="stylesheet">

<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            {{-- <ol class="carousel-indicators"></ol> --}}

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="{{asset('img/service.jpg') }}" class="w-auto" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Nos Services</h2>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection

@section('services')
<section id="services">
    <div class="container">
        <div class="section-header wow fadeInUp">
            <h3>Services</h3>
            {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
        </div>

        <div class="row">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      CONSULTANCE IT
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                      <span><b>*</b></span>	<span> Le diagnostic des technologies déjà existantes au sein de votre entreprise ; </span><br>
                      <span><b>*</b></span>	<span> La création d’une solution personnalisée à travers un cahier des charges ; </span><br>
                      <span><b>*</b></span>	<span> Le choix des technologies adaptées et correspondantes au cahier des charges ; </span><br>
                      <span><b>*</b></span>	<span> L’accompagnement des collaborateurs dans le changement de technologies
                      via une formation ; </span><br>
                      <span><b>*</b></span>	<span> La vérification, l’avancement du projet, en fonction des délais et du cahier des charges ; </span><br>
                      <span><b>*</b></span>	<span> Le suivi des travaux terminés afin d’assurer l’efficacité des nouvelles technologies par rapport au besoin initial de votre entreprise. </span><br>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      GENIE LOGICIEL
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      <span><b>*</b></span>	<span> 	De la conception, le développement des produits logiciels ou des systèmes bass sur des logiciels en suivant les normes professionnelles adéquates ; </span><br>
                      <span><b>*</b></span>	<span> 	D’assurer par des tests adéquats que les produits logiciels sont conformes aux spécifications ; </span><br>
                      <span><b>*</b></span>	<span> 	D’assurer l’entretien des logiciels une fois déployés. </span><br>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      INFRASTRUCUTURE RESEAUX
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                      Avec TechnoD@ta, centraliser vos données d’entreprise afin de simplifier leur échange sécurisé et la communication entre les agents. <br>
                      La mise en place d’une infrastructure réseau vous permet d’améliorer et de sécuriser vos procédures internes afin d’obtenir des résultats plus performants. <br>
                      <span class="fw-bold">NOS QUALITES EN INFRASTRUCTURE RESEAUX</span><br>
                        <span><b>*</b></span> <span>La performance des applications</span><br>
                        <span><b>*</b></span> <span>Une infrastructure réseaux modulable </span><br>
                        <span><b>*</b></span> <span>La continuité du système </span><br>
                        <span><b>*</b></span> <span>La sécurité </span><br>
                        <span><b>*</b></span> <span>L’uniformisation des accès </span><br>
                        <span><b>*</b></span> <span>La capacité de stockage </span><br>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-heading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                        MATERIELS INFORMATIQUES ET TELECOMS
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                    <div class="accordion-body">
                        <span>Nous sommes spécialisés dans la vente de vos matériels informatiques et télécoms.</span> <br>
                        <span><b>Nos références :</b></span><br>
                        <span><b>*</b></span> <span> Hydraulique </span><br>
                        <span><b>*</b></span> <span> Energie Electrique </span><br>
                        <span><b>*</b></span> <span> Banque et Finances  </span><br>
                        <span><b>*</b></span> <span> Assurance </span><br>
                        <span><b>*</b></span> <span> BTP </span><br>
                        <span><b>*</b></span> <span> Organismes internationaux </span><br>
                        <span><b>*</b></span> <span> Sécurité </span><br>
                        <span><b>*</b></span> <span> Informatique et Télécommunication </span><br>
                        <span><b>*</b></span> <span> Ministère </span><br>
                        <span><b>*</b></span> <span> Gouvernement </span><br>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-heading5">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                      HEBERGEMENT WEB
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                    <div class="accordion-body">

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-heading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                      FORMATIONS ET CERTIFICATIONS
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                    <div class="accordion-body">

                    </div>
                  </div>
                </div>

              </div>
        </div>
    </div>
</section>

<script src="{{asset('js/bootstrap.min.js ') }}"></script>

@endsection
