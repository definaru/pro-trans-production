<div class="d-flex align-items-center justify-content-between">
    <div>
        @if ($item['quantity'] == 0)
            <x-badge color="danger" text="Нет в наличии" /> 
        @else
            <x-badge color="34617" text="В наличии {{$item['quantity']}}" />  
        @endif                                          
    </div>
    <h5>{!! $currency::summa($item['salePrices'][0]['value']) !!}</h5> 
</div>
<hr style="color: #ddd" />