<div class="d-flex align-items-center justify-content-between gap-2">
    <div>
        @if ($item['productFolder']['id'] === '8854033a-48ad-11ed-0a80-0c87007f4175')
            @if($item['quantity'] == 0)
                <p itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="label-danger">
                    Нет наличии
                </p>
            @else
                <p itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="label">
                    <link itemprop="availability" href="https://schema.org/InStock">В наличии {{$item['quantity']}}
                </p>  
            @endif   
        @else
            @if ($item['volume'] == 0)
                <p itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="label-danger">
                    Нет наличии
                </p>
            @else
                <p itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="label">
                    <link itemprop="availability" href="https://schema.org/InStock">В наличии {{$item['volume']}}
                </p> 
            @endif            
        @endif
    </div>
    <strong>
        {!!$currency::summa($item['salePrices'][0]['value'])!!}
    </strong>                            
</div>