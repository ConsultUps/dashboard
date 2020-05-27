<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->


    <a href="https://consultups.tech/wp-admin" target="_blank">
        <i class="fab fa-2x fa-wordpress text-secondary pl-3"></i>
    </a>
    <a href="https://gmail.com" target="_blank">
        <i class="fas fa-2x fa-envelope-open-text text-warning pl-3 d-none d-sm-block"></i>
    </a>
    <a href="https://facebook.com/consultups" target="_blank" class="d-none d-sm-block">
        <i class="fab fa-2x fa-facebook text-primary pl-3"></i>
    </a>
    <a href="https://twitter.com/consultups" target="_blank" class="d-none d-sm-block">
        <i class="fab fa-2x fa-twitter text-info pl-3"></i>
    </a>
    <a href="https://instagram.com/consultups" target="_blank" class="d-none d-sm-block">
        <i class="fab fa-2x fa-instagram text-dark pl-3"></i>
    </a>
    <a href="http://trabajofinaldeprctica.slack.com/" target="_blank" class="d-none d-sm-block">
        <i class="fab fa-2x fa-slack text-danger pl-3"></i>
    </a>
    <a href="https://trello.com/b/KEP7m29R/trabajo-final-pr%C3%A1ctica" target="_blank" class="d-none d-sm-block">
        <i class="fab fa-2x fa-trello text-primary pl-3"></i>
    </a>

    <a href="https://erp.consultups.tech" target="_blank" class="text-primary">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="175.000000pt" height="175.000000pt" viewBox="0 0 175.000000 175.000000"
             preserveAspectRatio="xMidYMid meet">
            <g transform="translate(10.000000,100.000000) scale(0.0137000,-0.0137000)"
               fill="#4E73DF" stroke="none">
                <path d="M0 875 l0 -875 875 0 875 0 0 875 0 875 -875 0 -875 0 0 -875z m1033
                537 c279 -76 437 -299 413 -583 -4 -42 -13 -97 -21 -123 -55 -184 -219 -336
                -406 -381 -35 -8 -110 -15 -166 -15 l-103 0 0 165 0 165 38 0 c63 0 152 18
                199 41 83 40 125 146 103 256 -10 46 -21 66 -54 99 -51 52 -92 64 -228 71
                l-108 6 -2 -399 -3 -399 -170 0 -170 0 -3 550 c-1 303 0 556 3 564 4 11 58 12
                303 9 262 -5 306 -8 375 -26z"/>
            </g>
        </svg>
    </a>



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto d-none d-sm-block">

        
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline badge
                {{( $profile->getJob() == 'CEO' ) ? 'badge-danger' : 'badge-success' }}
                ">{{$profile->getJob()}}</span>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$profile->getFullName()}}</span>
                <i class="fas fa-user text-dark"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('logout')}}" >
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Cerrar sesión
                </a>
            </div>
        </li>

    </ul>

</nav>
