@extends('layouts.back')


@section('content')




<!-- Start Banner Area -->
<h1 class="d-none">Android Oyun Store</h1>

<!-- End Banner Area -->
@include('banner.banner')
<!-- Start Post List Wrapper  -->
<div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <!-- Start Post List  -->






                <div class="content-block post-list-view is-active mt--30">

                    <div class="post-content">
                        <div class="axil-post-details">

                            <figure class="wp-block-image">
                                <img src="{{asset('storage')}}/{{$posts->image}}" alt="{{$posts->slug}}">
                                <figcaption>Android Oyun Store</figcaption>
                            </figure>

                        </div>

                        <div class="post-content">
                            <h1 class="title">{{$posts->title}}</h1>



                            <h2> {!! $posts->body !!} </h2>


                            @if (Auth::check() && Auth::user()->role_id==1)


                            
                            @if(session()->has('messagelink'))
                            <div class="alert alert-success">
                                {{ session()->get('messagelink') }}
                            </div>
                            @endif


                            <form action="{{route('linksave')}}" method="POST" enctype="multipart/form-data">

                                @csrf
                                @csrf
                                <input type="hidden" name="post_id" value="{{$posts->id}}">

                                Oyun linki Ekle: <input type="text" name="links" required>
                                Oyun Obb Linki Ekle: <input type="text" name="obblink">
                                <button type="submit" class="btn btn-primary btn-md">linki Kaydet</button>

                            </form>


                            @endif

                            <div class="post-content">
                                @foreach ($posts->getDownload as $down)


                                İndirme Linki
                                <div class="add-comment-button cerchio">
                                    <a class="axil-button button-rounded text-red" href="{{$down->links}}"
                                        tabindex="0"><span>Apk Dosyasını İndir</span></a> <a class="text-color:red"
                                        href="{{route('deletelink', $down->id )}}">İndirme Linkini Sil</a>

                                </div>
                                @if (!$down->obblink == null)

                           

                                Obb Linki

                                <div class="add-comment-button cerchio">
                                    <a class="axil-button button-rounded text-red" href="{{$down->obblink}}"
                                        tabindex="0"><span>Obb Dosyasını İndir</span></a> <a class="text-color:red"
                                        href="{{route('deletelink', $down->id )}}">Obb Dosyasını Sil</a>

                                </div>
                          
                                @endif
                                @endforeach
                            </div>

                        </div>







                        <div class="post-meta-wrapper">
                            <div class="post-meta">
                                <div class="post-author-avatar border-rounded">
                                    <img src="{{asset('assets')}}/images/post-images/author/author-image-2.png"
                                        alt="Author Images">
                                </div>

                                <div class="content">

                                    <h6 class="post-author-name">
                                        <a class="hover-flip-item-wrapper">
                                            <span class="hover-flip-item">
                                                <span data-text="hiddenenigma">hiddenenigma</span>
                                            </span>
                                        </a>
                                    </h6>
                                    <ul class="post-meta-list">
                                        <li>{{$posts->created_at->diffForHumans()}}</li>

                                    </ul>
                                </div>

                            </div>


                            <ul class="social-share-transparent justify-content-end">
                                <li><a href="https://www.instagram.com/androidoyunstore/"><i
                                            class="fab fa-instagram"></i></a></li>

                            </ul>


                        </div>
                    </div>
                </div>

                @if (Auth::check() && Auth::user()->role_id==1)



                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif


                <form action="{{route('saveimage')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @csrf
                    <input type="hidden" name="post_id" value="{{$posts->id}}">

                    Resim Yükle: <input type="text" name="image" required>

                    <button type="submit" class="btn btn-danger">Resmi Kaydet</button>

                </form>


                <figure class="wp-block-image">
                    <div class="post-gallery-activation axil-slick-arrow arrow-between-side">

                        @foreach ($posts->getImage as $item)


                        <div class="post-images">
                            <img width="400" height="400" src="{{$item->images}}" alt="{{$item->slug}}">

                            <a href="{{route('deleteimage', $item->id)}}"> Sil </a>
                        </div>

                        @endforeach



                    </div>
                    <figcaption>
                        @endif



                        <figure class="wp-block-image">
                            <div class="post-gallery-activation axil-slick-arrow arrow-between-side">

                                @foreach ($posts->getImage as $item)


                                <div class="post-images">
                                    <img src="{{$item->images}}" alt="{{$item->slug}}">
                                </div>

                                @endforeach



                            </div>
                            <figcaption>

                                Oyundan Bazı Görseller

                            </figcaption>
                        </figure>


                        <!-- End Post List  -->
                        <div class="axil-comment-area">


                            <!-- Start Comment Respond  -->
                            <div class="comment-respond">
                                <h4 class="title">Yorumlar: ({{$posts->getComment()}})</h4>

                            </div>
                            <!-- End Comment Respond  -->
                            @comments(['model' => $posts])

                            <!-- Start Comment Area  -->
                            <div class="axil-comment-area">
                                <h4 class="title"></h4>
                                <ul class="comment-list">
                                    <!-- Start Single Comment  -->

                                    <!-- End Single Comment  -->
                                    <!-- Start Single Comment  -->

                                    <!-- End Single Comment  -->
                                </ul>
                            </div>
                            <!-- End Comment Area  -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="axil-banner mb--30">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img class="w-100" src="{{asset('assets')}}/tasarımlar/banner3.gif"
                                                    alt="Banner Images">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Comment Form Area  -->

                        <!-- End Post List  -->
            </div>


            <div class="col-lg-4 col-xl-4 mt_md--40 mt_sm--40">
                <!-- Start Sidebar Area  -->
                <div class="sidebar-inner">


                    <!-- End Single Widget  -->

                    <!-- Start Single Widget  -->
                    <livewire:search-dropdown-two />

                    <!-- End Single Widget  -->

                    <!-- Start Single Widget  -->
                    @include('game.rastgele')
                </div>





                <!-- End Single Widget  -->

                <!-- Start Single Widget  -->
                <div class="axil-single-widget widget widget_social mb--30">
                    <h5 class="widget-title">Sosyal</h5>
                    <!-- Start Post List  -->
                    <ul class="social-icon md-size justify-content-center">

                        <li><a href="https://www.instagram.com/androidoyunstore/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com/channel/UCDMr2E1TO617ZB5pnaT4xBQ"><i
                                    class="fab fa-youtube"></i></a></li>

                    </ul>
                    <!-- End Post List  -->
                </div>
                <!-- End Single Widget  -->

                <!-- Start Single Widget  -->
                <div class="axil-single-widget widget widget_instagram mb--30">
                    <h5 class="widget-title">Kategoriler</h5>
                    <!-- Start Post List  -->
                    <ul class="instagram-post-list-wrapper">



                        @include('layouts.instagram')
                    </ul>
                    <!-- End Post List  -->
                </div>
                <div class="axil-single-widget widget widget_instagram mb--30">
                    <h5 class="widget-title">Taglar</h5>
                    <!-- Start Post List  -->
                    <ul class="instagram-post-list-wrapper">

                        {{$posts->meta_keywords}}


                    </ul>
                    <!-- End Post List  -->
                </div>
                <!-- End Single Widget  -->
            </div>
            <!-- End Sidebar Area  -->



        </div>
    </div>
</div>
</div>
<!-- End Post List Wrapper  -->


<!-- Start Categories List  -->
<div class="axil-categories-list axil-section-gap bg-color-grey">
    <div class="container">
        <div class="row align-items-center mb--30">
            <div class="col-lg-6 col-md-8 col-sm-8 col-12">
                <div class="section-title">
                    <h2 class="title">Kategoriler</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4 col-12">
                <div class="see-all-topics text-left text-sm-right mt_mobile--20">
                    <a class="axil-link-button" href="#">Kategori</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Start List Wrapper  -->
                <div class="list-categories categories-activation axil-slick-arrow arrow-between-side">


                    @foreach ($categories as $cat)


                    <div class="single-cat">
                        <div class="inner">
                            <a href="{{route('category' , $cat->slug )}}">
                                <div class="thumbnail">
                                    <img src="{{asset('assets')}}/images/post-single/stories-02.jpg"
                                        alt="{{ucwords($cat->name)}}">
                                </div>
                                <div class="content">
                                    <h5 class="title">{{ucwords($cat->name)}}</h5>
                                    <span class="badge badge-danger">
                                        {{$cat->postCount()}}</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    @endforeach
                    <!-- Start Single Category  -->

                    <!-- End Single Category  -->


                    <!-- Start List Wrapper  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start Categories List  -->
</div>


@endsection