<!DOCTYPE html>
<html lang="es">

<head>
    @include('assets/meta')
    <title>@yield('title') | ConsultUps Panel</title>
    @include('assets/links')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('assets/sidebar')
        <div id="content-wrapper" class="d-flex flex-column">


            <div id="content">
                @include('assets/topbar')

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('heading', 'Dashboard')</h1>
                    </div>
                    @yield('content')
                </div>
            </div>


            @include('assets/footer')
        </div>
    </div>
    @include('assets/scrolltop')
    @include('assets/logoutmodal')
    @include('assets/scripts')
</body>

</html>
