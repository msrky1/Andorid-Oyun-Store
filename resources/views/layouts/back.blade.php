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

</head>

<body>

    <div class="main-wrapper">

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <div id="my_switcher" class="my_switcher">
            <ul>
                <li>
                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                        <span title="Light Mode">Gündüz</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                        <span title="Dark Mode">Gece</span>
                    </a>
                </li>
            </ul>
        </div>
        <header class="header axil-header header-style-4  header-light header-sticky ">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <div
                                class="header-top-bar d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <ul class="header-top-date liststyle d-flex flrx-wrap align-items-center mr--20">
                                    <li><a href="#">4 Nisan, 2020</a></li>
                                </ul>
                                <ul class="header-top-nav liststyle d-flex flrx-wrap align-items-center">
                                    <li><a href="#">İlan</a></li>
                                    <li><a href="#">İletişim</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <ul class="social-share-transparent md-size justify-content-center justify-content-md-end">

                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-4 col-md-4 col-12">
                            <div
                                class="wrapper d-block d-sm-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <div class="logo">
                                    <a href="/">
                                        <img class="dark-logo" src="{{asset('assets')}}/images/logo/logo-siyah.png"
                                            alt="Android Oyun Store logo">
                                        <img class="light-logo" src="{{asset('assets')}}/images/logo/logo-beyaz.png"
                                            alt="Android Oyun Store logo">
                                    </a>
                                </div>
                                <div class="mainmenu-wrapper d-none d-xl-block">
                                    <nav class="mainmenu-nav">
                                        <!-- Start Mainmanu Nav -->
                                        <ul class="mainmenu">
                                            <li class="menu-item-has-children"><a href="/">Anasayfa</a>

                                            </li>

                                            <li class="menu-item-has-children"><a href="#">Oyunlar</a>
                                                <ul class="axil-submenu">



                                                    <?php  $posts =  DB::select('Select * From posts') ?>

                                                    @foreach ($posts as $item)


                                                    <li>
                                                        <a class="hover-flip-item-wrapper"
                                                            href="{{route('detail' , $item->slug )}}">
                                                            <span class="hover-flip-item">
                                                                <span data-text="{{$item->title}}">
                                                                    {{$item->title}} </span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children megamenu-wrapper"><a href="#">En Çok
                                                    Tıklanan
                                                </a>
                                                <ul class="megamenu-sub-menu">
                                                    <li class="megamenu-item">

                                                        <!-- Start Verticle Nav  -->




                                                        <div class="axil-vertical-nav">
                                                            <ul class="vertical-nav-menu">
                                                                <li class="vertical-nav-item active">
                                                                    <a class="hover-flip-item-wrapper" href="#tab1">
                                                                        <span class="hover-flip-item">
                                                                            <span
                                                                                data-text="Accessibility">Accessibility</span>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>


                                                        <!-- Start Verticle Nav  -->

                                                        <!-- Start Verticle Menu  -->
                                                        <div class="axil-vertical-nav-content">
                                                            <!-- Start One Item  -->
                                                            <div class="axil-vertical-inner tab-content" id="tab1"
                                                                style="display: block;">
                                                                <div class="axil-vertical-single">
                                                                    <div class="row">





                                                                        @foreach ($hits as $item)



                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a
                                                                                        href="{{route('detail' , $item->slug )}}">
                                                                                        <img src="{{asset('storage')}}/{{$item->image}}"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="{{$item->getCategory->name}}">{{$item->getCategory->name}}</span>

                                                                                                </span>


                                                                                            </a>
                                                                                        </div>
                                                                                        <ul class="post-meta-list">
                                                                                            <li>{{$item->created_at->diffForHumans()}}
                                                                                            </li>
                                                                                            <li>Görüntülenme:
                                                                                                {{$item->hit}}</li>




                                                                                        </ul>

                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="{{route('detail' , $item->slug )}}">

                                                                                            {{$item->title}}
                                                                                        </a></h5>
                                                                                    <div>
                                                                                        <a
                                                                                            href="{{route('detail' , $item->slug )}}">
                                                                                            <button
                                                                                                class="sm btn-danger">
                                                                                                İndir <button></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End One Item  -->

                                                            <!-- Start One Item  -->


                                                            <!-- End One Item  -->

                                                            <!-- Start One Item  -->


                                                        </div>
                                                        <!-- End Verticle Menu  -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <?php $categories = DB::select('Select * From categories')?>




                                            <li class="menu-item-has-children"><a href="#">Kategoriler</a>
                                                <ul class="axil-submenu">
                                                    @foreach ($categories as $cat)
                                                    <li>
                                                        <a class="hover-flip-item-wrapper"
                                                            href="/kategori/{{$cat->slug}}">
                                                            <span class="hover-flip-item">
                                                                <span data-text="{{$cat->name}}">{{$cat->name}}</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </li>


                                        </ul>
                                        <!-- End Mainmanu Nav -->
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-8 col-md-8 col-12">
                            <div
                                class="header-search d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">

                                <ul class="metabar-block">
                                    @if (Route::has('login'))

                                    @auth
                                    <li> <a href="{{ url('/dashboard') }}" class="text-gray-700 underline">
                                            {{ Auth::user()->name }}</a></li>
                                       <!--     <li class="icon"><a href="/dashboard"><i class="fas fa-bookmark"></i></a></li> -->
                                        <li class="icon">    <a href="{{route('bildirimler')}}" ><i class="fas fa-bell"></i></a></li>
                                    @else
                                    <li> <a href="{{ route('login') }}" class=" text-gray-700 underline">Giriş Yap</a>
                                    </li>

                                    @if (Route::has('register'))
                                    <li> <a href="{{ route('register') }}" class=" text--100 underline">Üye Ol</a>
                                    </li>
                                    @endif
                                    @endauth
                                   

                                    @endif
                                    
                                   
                                    </li>
                                </ul>
                                <!-- Start Hamburger Menu  -->
                                <div class="hamburger-menu d-block d-xl-none">
                                    <div class="hamburger-inner">
                                        <div class="icon"><i class="fal fa-bars"></i></div>
                                    </div>
                                </div>
                                <!-- End Hamburger Menu  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->


        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area">
            <div class="inner">
                <div class="mobile-menu-top">
                    <div class="logo">
                        <a href="/">
                            <img class="dark-logo" src="{{asset('assets')}}/images/logo/logo-siyah.png"
                                alt="Logo Images">
                            <img class="light-logo" src="{{asset('assets')}}/images/logo/logo-beyaz.png"
                                alt="Logo Images">
                        </a>
                    </div>
                    <div class="mobile-close">
                        <div class="icon">
                            <i class="fal fa-times"></i>
                        </div>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="/">Anasayfa</a>

                    </li>
                    <li class="menu-item-has-children"><a href="#">Katogoriler</a>
                        <ul class="axil-submenu">
                            @foreach ($categories as $cat)


                            <li><a href="{{route('category' , $cat->slug )}}">{{$cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>


                    <li><a href="contact.html">İletişim</a></li>
                </ul>
                <div class="buy-now-btn">
                    En Çok Tıklanan Oyunlar
                    @foreach ($hits as $item)


                    <a href="#">{{$item->title}} <span class="badge">{{$item->hit}}</span></a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Mobile Menu Area  -->


        <!-- Page Heading -->


        <!-- Page Content -->

    </div>

    @yield('content')

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