<div class="mainmenu-wrapper d-none d-xl-block">
    <nav class="mainmenu-nav">
        <ul class="mainmenu">
            <li class="menu-item-has-children"><a href="#">Ara</a>
                <ul class="axil-submenu">
                    @if (!empty($query))

                        @if (!empty($posts))

                            @foreach ($posts as $p)
                                <li>
                                    <a class="hover-flip-item-wrapper" href="{{ route('detail', $p['slug']) }}">
                                        <span>
                                            <span data-text="{{ $p['title'] }}">{{ $p['title'] }}


                                            </span>

                                            <img src="{{ asset('storage/' . $p['image']) }}  " with="30" height="30">

                                        </span>




                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li>

                                <span class="hover-flip-item">
                                    <span data-text="Oyun Bulunamadı">Oyun Bulunamadı
                                    </span>
                                </span>

                            </li>



                        @endif
                    @endif
                    <li>
                        <div class="header-search text-right d-flex align-items-center">
                            <form class="header-search-form">
                                <div class="axil-search form-group">
                                    <button class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" wire:model="query" class="form-control"
                                        placeholder="Arama Yapın">
                                </div>
                            </form>

                        </div>
                    </li>


                </ul>
            </li>
        </ul>

    </nav>
    <!-- Start Hamburger Menu  -->
    <div class="hamburger-menu d-block d-xl-none">
        <div class="hamburger-inner">
            <div class="icon"><i class="fal fa-bars"></i></div>
        </div>
    </div>
    <!-- End Hamburger Menu  -->
</div>


<!-- Start Hamburger Menu  -->
<div class="hamburger-menu d-block d-xl-none">
    <div class="hamburger-inner">
        <div class="icon"><i class="fal fa-bars"></i></div>
    </div>
</div>
<!-- End Hamburger Menu  -->

</div>
