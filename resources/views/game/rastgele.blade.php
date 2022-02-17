<div class="axil-single-widget widget widget_postlist mb--30">
    <h5 class="widget-title">Rastgele Oyunlar</h5>
    <!-- Start Post List  -->
    <div class="post-medium-block">



   
@foreach ($rastgelePosts as $liste )
   
        <!-- Start Single Post  -->
        <div class="content-block post-medium mb--20">

            <div class="post-thumbnail">
                <a href="{{route('detail' , $liste->slug )}}">
                    <img src="../storage/{{$liste->image}}" alt="{{$liste->slug}}">
                </a>
            </div>
            <div class="post-content">
                <h6 class="title"><a href="{{route('detail' , $liste->slug )}}">{{$liste->title,30}}
                       </a></h6>
                <div class="post-meta">
                    <ul class="post-meta-list">
                        <li>{{$liste->hit}} Görüntüleme</li> 
                        <li>   {{$liste->getCategory->name}}</li>

                      <a  href="{{route('detail' , $liste->slug )}}"> <li><button class="btn btn-dark"> İndir</button></li></a>
                    </ul>
                  
                </div>
            </div>
        </div>

  
        <!-- End Single Post  -->
        @endforeach


    </div>
    <!-- End Post List  -->

</div>

<div class="axil-banner">
    <div class="thumbnail">
        <a href="#">
            <img class="w-100" src="{{asset('assets')}}/tasarımlar/banner2.gif" alt="Banner Images">
        </a>
    </div>
</div>
