<a href="/product/mersedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
    <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
        {{-- <x-icon-favorite color="#b02a37" />
        <small>{{rand(4, 5)}}.{{rand(0, 9)}} рейтинг</small>  --}}
        <meta itemprop="worstRating" content="1">
        <meta itemprop="ratingValue" content="4.9">
        <meta itemprop="bestRating" content="5">
    </div>
    <img 
        itemprop="image"
        loading="lazy"
        src="{{$images::src($item['id'])}}" 
        class="card-img-top rounded" 
        alt="{{$item['name']}}, Проспект Партс, {{$item['pathName']}}"
    />
</a>