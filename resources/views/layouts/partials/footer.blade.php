<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Liens</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('root_accueil_site') }}">Acceuil</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('root_formations') }}">Formations</a></li>
                        {{-- <li><i class="ion-ios-arrow-right"></i> <a href="">Certifications</a></li> --}}
                        <li><i class="ion-ios-arrow-right"></i> <a href="{{ route('root_index_session_ouverte') }}">Actualité</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="technodatasolutions.bj">TDS</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact" style="color: #01674e">
                    <h4>Nous Contacter</h4>
                    <p>
                        Akpakpa Sodjèatinmey, lot 112 Immeuble Technodata en face de la SOBEBRA COTONOU BENIN <br>
                        <strong>Phone:</strong> +229 91 43 55 55<br>
                        <strong>Email:</strong> info@technodatasolutions.bj <br>
                    </p>

                    <div class="social-links">
                        <a href="https://twitter.com/TechnodataB" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/Tds-hosting-287580505117463/" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/technodatasolutions/" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/technodata-solutions" class="google-plus"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4 class='mb-5'>Newsletter</h4>
                    <form action="{{route('root_create_newsletter')}}" method="POST">
                        @csrf
                        <input type="email" name="newsletter" class="{{ $errors->has('newsletter') ? 'is-invalid' : '' }}"><input type="submit" value="Je m'abonne">
                        {!! $errors->first('newsletter', '<p class="text-danger">:message</p>') !!}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; {{ date('Y') }} Copyright <strong>technodata solutions</strong>. Tous droit réservés
        </div>
    </div>
</footer><!-- #footer -->
