@if($item['quantity'] == 0)
    <div onclick="isNotSignUp()" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
        <x-icon-add-card size="25px" color="#fff" />
    </div>
@else
    <div 
        id="card{{$item['id']}}" 
        data-card="{{$item['id']}},{{$item['article']}},{{$item['name']}},1,{{$item['salePrices'][0]['value']}},{{$item['salePrices'][0]['value']}},{{$images::src($item['id'])}}" 
        v-on:click="addToCard('{{$item['id']}}')"
        class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2"
    >
        <x-icon-add-card size="25px" color="#fff" />
    </div>
@endif