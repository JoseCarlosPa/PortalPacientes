<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/logoPacientes.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans:400,400i,700,700i|Poppins:300,400,500,600,700"
              rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/fonts/fontello/css/fontello.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/js/jquery.magnific-popup/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/js/jquery.fluidbox/fluidbox.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/js/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/js/selection-sharer/selection-sharer.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/rotate-words.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/align.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/main.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/js/shortcodes/shortcodes.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/768.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('argon') }}/css/992.css">

        <!-- INITIAL SCRIPTS -->
        <script src="{{ asset('argon') }}/js/modernizr.min.js"></script>

        @stack('css')

    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @if (!in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
                @include('layouts.navbars.sidebar')
            @endif
        @endauth

        <div class="main-content">
            @include('layouts.navbars.navbar')

            <!--Contenido-->
            @yield('content')

            <!--Fin de contenido-->
        </div>

        @if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
            @include('layouts.footers.guest')
        @endif

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
        <!-- Optional JS -->
        <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

        @stack('js')

        <script src="{{ asset('argon') }}/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="{{ asset('argon') }}/js/fastclick.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.fitvids.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.viewport.mini.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.waypoints.min.js"></script>
        <script src="{{ asset('argon') }}/js/jquery-validation/jquery.validate.min.js"></script>
        <script src="{{ asset('argon') }}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.isotope.min.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.fluidbox/jquery.fluidbox.min.js"></script>
        <script src="{{ asset('argon') }}/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{ asset('argon') }}/js/selection-sharer/selection-sharer.js"></script>
        <script src="{{ asset('argon') }}/js/socialstream.jquery.js"></script>
        <script src="{{ asset('argon') }}/js/jquery.collagePlus/jquery.collagePlus.min.js"></script>
        <script src="{{ asset('argon') }}/js/main.js"></script>
        <script src="{{ asset('argon') }}/js/shortcodes/shortcodes.js"></script>
    </body>
</html>
