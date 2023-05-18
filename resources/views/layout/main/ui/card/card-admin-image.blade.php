<a href="/dashboard/product/details/{{$item['id']}}" class="card-body pb-0 position-relative">
    <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
        <x-icon-favorite color="#b02a37" />
        <small>{{rand(4, 5)}}.0 рейтинг</small>
    </div>
    <img 
        src="{{$images::src($item['id'])}}" 
        class="card-img-top rounded" 
        alt="{{$item['name']}}" 
    />
</a>