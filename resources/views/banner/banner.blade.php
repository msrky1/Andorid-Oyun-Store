<h1 class="d-none">Android Oyun</h1>
<div class="slider-area bg-color-grey ptb--80">
    <div class="axil-slide slider-style-2 plr--135 plr_lg--30 plr_md--30 plr_sm--30">
        <div class="row row--10">
            <div class="col-lg-12 col-xl-6 col-md-12 col-12">

                <?php $projects=DB::table('projects')->get(); ?>
                <!-- Start Post Grid  --> @foreach ($projects as $liste)

                @if ($liste->banner == 'slider1')




                <div class="content-block post-grid post-grid-transparent post-overlay-bottom">
                    <div class="post-thumbnail">
                        <a href="/kategori/{{$liste->slug}}">
                            <img src="{{asset('storage')}}/{{$liste->image}}" alt="Post Images">
                        </a>
                    </div>
                    <div class="post-grid-content">
                        <div class="post-content">
                            <div class="post-cat">
                                <div class="post-cat-list">
                                    <a class="hover-flip-item-wrapper" href="/kategori/{{$liste->slug}}">
                                        <span class="hover-flip-item">
                                            <span data-text="{{$liste->title}} ">{{$liste->title}}
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <h3 class="title"><a href="/kategori/{{$liste->slug}}">{!! $liste->title !!}</a></h3>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <!-- Start Post Grid  -->
            </div>
            <div class="col-lg-12 col-xl-6 col-md-12 col-12 mt_lg--20 mt_md--20 mt_sm--20">
                <div class="row row--10">



                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        @foreach ($projects as $liste)
                        @if ($liste->banner == 'slider2')


                        <!-- Start Post Grid  -->
                        <div class="content-block post-grid post-grid-transparent post-grid-small post-overlay-bottom">
                            <div class="post-thumbnail">
                                <a href="/kategori/{{$liste->slug}}">
                                    <img src="../storage/{{$liste->image}}" alt="../storage/{{$liste->image}}">
                                </a>
                            </div>
                            <div class="post-grid-content">
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="{{$liste->slug}}">
                                                <span class="hover-flip-item">
                                                    <span
                                                        data-text="{{$liste->title}}">{{$liste->title}}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="/kategori/{{$liste->slug}}">{{$liste->title}} </a></h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <!-- Start Post Grid  -->
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6 mt_mobile--20 col-12">
                        @foreach ($projects as $liste)
                        @if ($liste->banner == 'slider3')
                        <!-- Start Post Grid  -->
                        <div class="content-block post-grid post-grid-transparent post-grid-small post-overlay-bottom">
                            <div class="post-thumbnail">
                                <a href="/kategori/{{$liste->slug}}">
                                    <img src="../storage/{{$liste->image}}" alt="../storage/{{$liste->image}}">
                                </a>
                            </div>
                            <div class="post-grid-content">
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="{{$liste->slug}}">
                                                <span class="hover-flip-item">
                                                    <span
                                                        data-text="{{$liste->title}}">{{$liste->title}}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="/kategori/{{$liste->slug}}">{{$liste->title}} </a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- Start Post Grid  -->
                    </div>
                    @endif
                    @endforeach

                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--20">
                        <!-- Start Post Grid  -->
                        @foreach ($projects as $liste)
                        @if ($liste->banner == 'slider4')

                        <div class="content-block post-grid post-grid-transparent post-grid-small post-overlay-bottom">
                            <div class="post-thumbnail">
                                <a href="/kategori/{{$liste->slug}}">
                                    <img src="../storage/{{$liste->image}}" alt="../storage/{{$liste->image}}">
                                </a>
                            </div>
                            <div class="post-grid-content">
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="{{$liste->slug}}">
                                                <span class="hover-flip-item">
                                                    <span
                                                        data-text="{{$liste->title}}">{{$liste->title}}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="/kategori/{{$liste->slug}}">{{$liste->title}} </a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- Start Post Grid  -->
                        @endif
                        @endforeach
                        
                    </div>
                    @foreach ($projects as $liste)
                    @if ($liste->banner == 'slider5' )
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt--20">
                        <!-- Start Post Grid  -->
                        <div class="content-block post-grid post-grid-transparent post-grid-small post-overlay-bottom">
                            <div class="post-thumbnail">
                                <a href="/kategori/{{$liste->slug}}">
                                    <img src="../storage/{{$liste->image}}" alt="../storage/{{$liste->image}}">
                                </a>
                            </div>

                            <div class="post-grid-content">
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="/kategori/{{$liste->slug}}">
                                                <span class="hover-flip-item">
                                                    <span
                                                        data-text="{{$liste->title}}">{{$liste->title}} </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="title"><a href="/kategori/{{$liste->slug}}">{{$liste->title}} </a></h5>
                                </div>
                            </div>
                        </div>
                        <!-- Start Post Grid  -->
                        @endif
                        @endforeach

                       
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Banner Area -->