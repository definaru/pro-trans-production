<div class="d-flex align-items-center justify-content-between gap-2">
    <div>
        @if($item['quantity'] == 0)
        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label-danger">
            Нет наличии
        </p>
        @else
        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
            <link itemprop="availability" href="https://schema.org/InStock">В наличии {{$item['quantity']}}
        </p>  
        @endif
    </div>
    <strong>
        {!!$currency::summa($item['salePrices'][0]['value'])!!}
    </strong>                            
</div>