<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">
            <a href=""><img src="{{asset('img/logo.png')}}" style="width:150px; margin-top : 3px" alt="" title="" /></a>
        </div>

    </div>

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                <li>
                    <a href="{{ route('root_admin_tableau_de_bord') }}" class="waves-effect">
                        <i class="dripicons-meter"></i>
                        <strong>Tableau de bord </strong>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-address-book-o"></i>
                        <strong>Formation </strong> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('root_admin_create_formation') }}">Ajouter une Formation</a></li>
                        <li><a href="{{ route('root_admin_index_formation') }}">Liste des Formations</a></li>
                        <li><a href="{{ route('categories-formations.index') }}">Liste des Categories</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-address-book-o"></i>
                        <strong>Session Ouverte </strong> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('root_admin_create_session_ouverte') }}">Ajouter une Session</a></li>
                        <li><a href="{{ route('root_admin_index_session_ouverte') }}">Liste des Sessions</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('root_admin_index_newsletter') }}" class="waves-effect"><i class="fa fa-user-circle"></i><strong>
                            Newsletter</strong></a>
                </li>
                <li class="">
                    <a href="{{ route('profile.show') }}" class="waves-effect"><i class="fa fa-user-circle"></i><strong>
                            Mon profile</strong></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
