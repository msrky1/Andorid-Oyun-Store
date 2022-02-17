<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    {!! JsonLdMulti::generate() !!}



    <!-- LUMEN -->


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>



    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="robots" content="noindex, follow" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/')}}/images/favicon.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/vendor/slick.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/vendor/base.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/plugins/plugins.css">
    <link rel="stylesheet" href="{{asset('assets/')}}/css/style.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/')}}/images/favicon.png">

</head>

<body>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

    

    @include('front.footer')

    @livewireScripts

    <script src="{{asset('assets/')}}/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="{{asset('assets/')}}/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/')}}/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('assets/')}}/js/vendor/slick.min.js"></script>
    <script src="{{asset('assets/')}}/js/vendor/tweenmax.min.js"></script>
    <script src="{{asset('assets/')}}/js/vendor/js.cookie.js"></script>
    <script src="{{asset('assets/')}}/js/vendor/jquery.style.switcher.js"></script>


    <!-- Main JS -->
    <script src="{{asset('assets/')}}/js/main.js"></script>
</body>

</html>