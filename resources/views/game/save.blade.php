@extends('layouts.back')


@section('content')
    
 
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
                                </div>

                                <div class="content">

                                    <h6 class="post-author-name">
                                        <a class="hover-flip-item-wrapper">
                                            <span class="hover-flip-item">
                                            </span>
                                        </a>
                                    </h6>
                                    <ul class="post-meta-list">

                                    </ul>
                                </div>
                            </div>
                            <ul class="social-share-transparent justify-content-end">
                      

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



                  




                    </ul>
                    <!-- End Post List  -->
                </div>
                <!-- End Single Widget  -->
                <div class="axil-banner">
                    <div class="thumbnail">
                        <a href="#">
                            <img class="w-100" src="{{asset('assets')}}/tasarımlar/banner4.gif"
                                alt="Android Oyun Store">
                        </a>
                    </div>
                </div>

            </div>


            <!-- End Sidebar Area  -->


        </div>
    </div>
</div>
</div>
<!-- End Post List Wrapper  -->

@endsection