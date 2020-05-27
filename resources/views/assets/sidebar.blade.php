<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        {{--<div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>--}}
        <img src="/img/cu.png" alt="" width="50px">
        <div class="sidebar-brand-text mx-3">Panel <sup>beta</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{(Route::currentRouteName()=='dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    @if($profile->getJob() == 'CEO' || $profile->getJob() == 'Marketing')
    <div class="sidebar-heading">
        Marketing
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{(Route::currentRouteName()=='marketing.wordpress') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{route('marketing.wordpress')}}">
            <i class="fab fa-wordpress-simple"></i>
            <span>Wordpress</span>
        </a>
    </li>
    <li class="nav-item {{(Route::currentRouteName()=='marketing.rrss') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{route('marketing.rrss')}}">
            <i class="fab fa-facebook-f"></i>
            <span>Redes Sociales</span>
        </a>
    </li>
    <li class="nav-item {{(Route::currentRouteName()=='marketing.ga') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{route('marketing.ga')}}">
            <i class="fas fa-chart-pie"></i>
            <span>Google Analytics</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">
    @endif

    @if($profile->getJob() == 'CEO' || $profile->getJob() == 'Comercio Electronico')
    <!-- Heading -->
    <div class="sidebar-heading">
        Ventas
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{(Route::currentRouteName()=='ventas.woocommerce') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{route('ventas.woocommerce')}}">
            <i class="fas fa-store"></i>
            <span>Ventas</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endif

    @if($profile->getJob() == 'CEO' || $profile->getJob() == 'ERP/CRM')
    <!-- Heading -->
    <div class="sidebar-heading">
        ERP / CRM
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{(Route::currentRouteName()=='erp.estadisticas') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{route('erp.estadisticas')}}">
            <i class="fas fa-chart-bar"></i>
            <span>Estadísticas</span>
        </a>
    </li>
    <li class="nav-item {{(Route::currentRouteName()=='erp.tickets') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{route('erp.tickets')}}">
            <i class="fas fa-ticket-alt"></i>
            <span>Tickets</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endif

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->