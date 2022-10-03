@extends('layouts/master', ['title'=>'Nous Contacter'])
<style>


</style>
@section('style')
<style>

.section-bg {
    background: #fff !important;
}

.bg-1 {
    background: linear-gradient(rgba(1, 103, 78, 0.4), rgba(1, 103, 78, 0.4)), url('img/contact.jpg')no-repeat;
    /* -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; */
    height: 100%;
}

</style>

@endsection


@section('slide')

<section class="" style="height: 50vh;">
    <div class="d-flex bg-1">
        <div class=" m-auto">
            <span class="text-center fw-bold d-block" style="font-size: 46px; color: #fff">Contact</span>
            <span class="text-center fw-bold font-italic" style="font-size: 24px; color: #fff">Vous avez des questions concernant notre gamme de formations ou de services ?</span>
        </div>
    </div>
</section>
@endsection

@section('contact')

<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3>Contactez Nous</h3>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Adresse</h3>
                    <address> Akpakpa Sodjèatinmey, lot 112 Immeuble Technodata en face de la SOBEBRA COTONOU BENIN</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Téléphone</h3>
                    <p><a href="tel:+229213570">+229 21 33 57 30</a></p>
                    <p><a href="tel:+22991435555">+229 91 43 55 55</a></p>
                    <p><a href="tel:+22999200606">+229 99 20 06 06</a></p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:training@technodatasolutions.bj">training@technodatasolutions.bj</a></p>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2139722317643!2d2.451288614266153!3d6.366348926737731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023552ee67f442f%3A0xcb91562a1104a7b6!2sTechnoData%20Solutions!5e0!3m2!1sfr!2sbj!4v1643299609321!5m2!1sfr!2sbj" class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6">
                <form class="row g-3" method="POST" action="{{ route('root_contact_send_message') }}">
                    @csrf
                    <div class="mt-2 col-md-6">
                        <label for="nom" class="form-label">Nom et Prénom</label>
                        <input type="text" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" id="nom" name="nom">
                        {!! $errors->first('nom', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="mt-2 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email">
                        {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="mt-2 col-12">
                        <label for="objet" class="form-label">Objet</label>
                        <input type="text" class="form-control {{ $errors->has('objet') ? 'is-invalid' : '' }}" id="objet" name="objet">
                        {!! $errors->first('objet', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="mt-2 col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"></textarea>
                        {!! $errors->first('message', '<p class="text-danger">:message</p>') !!}
                    </div>
                    <div class="mt-3 col-12">
                        <button type="reset" class="btn bg-white" style="border: 1px solid #02674e; box-sizing: border-box; color: #02674e;">Annuler</button>
                        <button type="submit" class="btn text-white float-right" style=" background: #02674e;" name="btn_form_contact">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
