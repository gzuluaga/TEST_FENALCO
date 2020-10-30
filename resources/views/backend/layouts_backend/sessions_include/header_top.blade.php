<div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
    <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
            <div class="container-fluid p-0">

                <!-- Navbar toggler -->

                <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand ">
                    <img class="navbar-brand-icon" src="{{ asset('assets/images/stack-logo-white.svg') }}" width="22" alt="">
                    <span>{{ env('APP_NAME_GLOBAL','Laravel Default') }}</span>
                </a>

                <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                  {{--   <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="material-icons">help_outline</i> Get Help
                        </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="pricing.html" class="btn btn-outline-warning">
                            <i class="material-icons">star</i> PRO
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                            <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                        </a>
                        <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                            <div class="dropdown-item d-flex align-items-center py-2">
                                <span class="flex navbar-notifications-menu__title m-0">Notificaciones</span>

                                <a href="javascript:void(0)" class="text-muted"><small>Limpiar Todo</small></a>
                            </div>
                            <div class="navbar-notifications-menu__content" data-simplebar>
                                <div class="py-2">

                                    <div class="dropdown-item d-flex">
                                        <div class="mr-3">
                                            <div class="avatar avatar-sm" style="width: 32px; height: 32px;">
                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                            <small class="text-muted">1 minute ago</small>
                                        </div>
                                    </div>
                              

                                </div>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">Ver Todo</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                    <li class="nav-item dropdown">
                        <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                            <img src="{{ asset('img/user.png') }}" class="rounded-circle" width="32" alt="Frontted">
                            <span class="ml-1 d-flex-inline">
                                <span class="text-light">{{ Auth::User()->name }}</span>
                            </span>
                        </a>
                        <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item active" href="{{ URL::to('/') }}">Dashboard</a>
                            <a class="dropdown-item" href="{{ URL::to('profile_user') }}">Editar Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();                                                     document.getElementById('logout-form').submit();">Cerrar Sesion</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</div>