<div class="axil-single-widget widget widget_search mb--30">
    <h5 class="widget-title">Ara</h5>





        <div class="axil-search form-group">
            <button class="search-button"><i class="fal fa-search"></i></button>
            <input type="text" wire:model="query" class="form-control" placeholder="Ara">
        </div>

    @if(!empty($query))

    @if(!empty($posts))
    @foreach ($posts as $p)





        <a class="hover-flip-item-wrapper" href="{{ route('detail', $p['slug'] )}}">
            <span>
                <span data-text="{{ $p['title'] }}">{{ $p['title'] }}


                </span>
                <div class="post-thumbnail">
                    <a href="{{ route('detail', $p['slug'] )}}">
                        <img src="{{asset('storage/' .  $p['image'] )}} " >
                    </a>
                </div>

            </span>




        </a>







    @endforeach
    @else
    

        <span class="hover-flip-item">
            <span data-text="Oyun Bulunamadı">Oyun Bulunamadı
            </span>
        </span>




    @endif

    @endif
</div>