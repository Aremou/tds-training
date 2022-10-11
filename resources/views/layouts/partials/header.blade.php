  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            {{-- <h1><a href="#intro" class="scrollto font-italic"> rmi </a></h1> --}}

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('root_accueil_site') }}">
                <img src="{{asset('img/logo.png')}}" style="width:150px; margin-top : -22px" alt="" title="" />
            </a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class=""><a href="{{ route('root_accueil_site') }}">Acceuil</a></li>
                <li class=""><a href="{{ route('root_formations') }}">Formations</a></li>
                {{-- <li class=""><a href="">Certifications</a></li> --}}
                <li class=""><a href="{{ route('root_index_session_ouverte') }}">Actualité</a></li>
                <li class=""><a href="https://technodatasolutions.bj">TDS</a></li>
                <li class=""><a href="{{ route('root_contact') }}">Contact</a></li>
                {{-- <li>
                    <a href="{{ route('root_search') }}">
                        <i class="fa fa-search text-white" aria-hidden="true"></i>
                    </a>
                </li> --}}

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
