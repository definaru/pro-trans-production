<div class="me-5 text-secondary small">
    Показано: 
    <span>
        @if($product['meta']['size']-$offset < $limit)
            {{$offset+$product['meta']['size']-$offset}}
        @else
            {{$offset == 0 ? $limit : $limit+$offset}}
        @endif
    </span> из 
    <span>{{$product['meta']['size']}}</span>
</div>