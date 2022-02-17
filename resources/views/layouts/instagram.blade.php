@foreach ($categories as $p)
    
<div>
    <li class="instagram-post-list">
        <a href="/kategori/{{$p->slug}}">
            {{$p->name}}
        </a>
    </li>
</div>

@endforeach




