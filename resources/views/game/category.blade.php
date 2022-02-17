@extends('layouts.back')


@section('content')




<!-- Start Banner Area -->
@include('banner.banner')
<!-- Start Post List Wrapper  -->


<div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <!-- Start Post List  -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-banner mb--30">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="w-100" src="{{asset('assets')}}/tasarımlar/banner1.gif"
                                        alt="Banner Images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($posts as $liste)



                <div class="content-block post-list-view is-active mt--30">
                    <div class="post-thumbnail">
                        <a href="{{route('detail', $liste->slug )}}">
                            <img src="../storage/{{$liste->image}}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper">
                                    <span class="hover-flip-item">
                                        <span data-text="{{$liste->getCategory->name}}">{{$liste->getCategory->name}}
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <h4 class="title"><a href="{{route('detail', $liste->slug )}}">{{$liste->title}}
                            </a></h4>
                        <h6> {!! $liste->body = Str::limit($liste->body, 100) !!} </h6>

                        <div class="add-comment-button cerchio">
                            <a class="axil-button button-rounded" href="{{route('detail', $liste->slug )}}" tabindex="0"><span>İndir</span></a>
                        </div>

                        <div class="post-meta-wrapper">
                            <div class="post-meta">
                                <div class="post-author-avatar border-rounded">
                                    <img src="{{asset('assets/')}}/images/post-images/author/author-image-2.png"
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
                                        <li>{{$liste->created_at->diffForHumans()}}</li>
                                        <li>Görüntülenme: {{$liste->hit}}</li>
                                        <li>Yorumlar: {{$liste->getComment()}}</li>
                                      
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-share-transparent justify-content-end">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>


       
                <!-- End Post List  -->
                @endforeach
                <div class="content-block post-list-view is-active mt--30">
                    <div class="post-thumbnail">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-cat">
                            <div class="post-cat-list">
                                <a class="hover-flip-item-wrapper">
                                    <span class="hover-flip-item">


                                    </span>
                                </a>
                            </div>
                        </div>
                        </a></h4>

                        
                        <div class="post-meta-wrapper">
                            <div class="post-meta">
                                <div class="post-author-avatar border-rounded">
                                    <h6 class="post-author-name">
                                        <a class="hover-flip-item-wrapper">
                                            <span class="hover-flip-item">
                                                {{$category->name}} Kategorisi İçin  
                                            
                                                 <span class="hover-flip-item">
                                                    <span
                                                        data-text="{{count($posts)}}">{{count($posts)}}
                                                    </span>
                                                </span>   Sonuç Bulundu.
                                            </span>
                                        </a>
                                    </h6>
                                </div>

                                <div class="content">

                                   
                                    <ul class="post-meta-list">

                                    </ul>
                                </div>
                            </div>
                            <ul class="social-share-transparent justify-content-end">
                                {{ $posts->onEachSide(5)->links() }}


                                <style>
                                    .w-66 {

                                        display: none;
                                    }
                                </style>

                            </ul>
                        </div>
                    </div>
                </div>
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
                    <?php $cats=DB::table('categories')->get(); ?>

                    @foreach ($cats as $cat)


                    <div class="single-cat">
                        <div class="inner">
                            <a href="{{route('category', $cat->slug )}}">
                                <div class="thumbnail">
                                    <img src="{{asset('assets/')}}/images/post-single/stories-02.jpg"
                                        alt="{{ucwords($cat->name)}}">
                                </div>
                                <div class="content">
                                    <h5 class="title">{{ucwords($cat->name)}}</h5>
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