 <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="avatar mr-3">
                        <img src="{{ asset('img/user.png') }}" alt="avatar" class="avatar-img rounded-circle">
                    </span>
                    <span class="flex d-flex flex-column">
                        <strong>{{ Auth::User()->name }}</strong>
                        <small class="text-muted text-uppercase">Administrador</small>
                    </span>
                </a>
         
            </div>
            <div class="sidebar-heading sidebar-m-t">Menu</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active open">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons"></i>
                        <span class="sidebar-menu-text">Administración</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse show " id="dashboards_menu">
                         <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ URL::to('administracion_usuarios') }}">
                                <span class="sidebar-menu-text">Administración de usuarios</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-heading">Administración de Tareas</div>
            <div class="sidebar-block p-0">
                <ul class="sidebar-menu" id="components_menu">
                     <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ URL::to('dashboard') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                            <span class="sidebar-menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ URL::to('crear_tarea') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">playlist_add</i>
                            <span class="sidebar-menu-text">Crear Tarea</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="{{ URL::to('consultar_tarea') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">format_list_bulleted</i>
                            <span class="sidebar-menu-text">Consultar Tarea</span>
                        </a>
                    </li>                   
                </ul>
            </div>      
        </div>
    </div>
</div>