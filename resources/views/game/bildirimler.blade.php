@extends('layouts.back')


@section('content')




<!-- Start Banner Area -->
<h1 class="d-none">Android Oyun Store</h1>
@include('banner.banner')
<!-- End Banner Area -->
<!-- Start Post List Wrapper  -->
<div class="axil-post-list-area post-listview-visible-color axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-8">
                <!-- Start Post List  -->



                <div class="axil-post-details">
                    <div class="post-content">
                   Kullanıcının Oyunlar Hakkında Yorumları, Sizleri Oyun Hakkında Fikir Sahibi Yapabilir.
                    </div>
                </div>

                <div class="content-block post-list-view is-active mt--30">
      

            
                      
                
                    <div class="post-content">
                      
                        <div class="axil-post-details">
                            @foreach ($comment as $com)
                 

        

                            <div class="alert alert-success" role="alert">
                         <span class="badge bage-dark tex-red">    {{$com->getUsers->name}} </span>  Kullanıcısı   <a  target="_blank" href="/oyunlar/{{$com->getPosts->slug}}" class="alert-link">{{$com->getPosts->title}}</a>. Oyunu Hakkında Yorum Yaptı.
                                <span class="badge badge-danger"> {{$com->comment}}</span>

                               
                              </div>



                           @endforeach
              
                     
                        </div>
                    </div>
                </div>


                <!-- End Post List  -->
                <div class="axil-comment-area">
                   
                    
                    <!-- Start Comment Respond  -->
                    <div class="comment-respond">
                        
                  
                    </div>
                    <!-- End Comment Respond  -->
                 

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
                                    <img src="{{asset('assets')}}/images/post-single/stories-02.jpg" alt="{{ucwords($cat->name)}}">
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