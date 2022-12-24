@php
    if($image === []) {
        $img = '/img/no_photo.jpg';
    } else {
        $img = $image[0]['miniature']['href'];
    }
@endphp
<tr>
    <td>
        <div class="ms-2">
            {{$id}}
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center gap-2">
            <img src="{{ $img }}" alt="{{$name}}" class="rounded image-product" />
            <small>
                <a href="/dashboard/product/details/{{$href}}" class="name fw-bold text-decoration-none text-dark">
                    {{$name}}
                </a>
            </small>
        </div>
    </td>
    <td><a href="/dashboard/product/details/{{$href}}" class="text-danger text-decoration-none">{{$vendorcode}}</a></td>
    <td><small><strong>@php echo number_format(($price) / 100, 2, '.', ' ') @endphp ₽</strong></small></td>
    <td>
        @if($availability === '0')
            <!-- <a href="#">
                <small class="badge text-bg-secondary">Заказать</small>
            </a> -->
            <x-badge color="danger" text="Нет в наличии" />
        @else
            <x-badge color="34617" text="В наличии - {{$availability}} шт." />
        @endif
    </td>
    <td>
        <div class="card-body p-0 d-flex align-items-center">
            <div class="icon-brand">
                <img src="/img/guayaquillib/mercedes-benz.png" alt="MERCEDES-BENZ" class="w-50" />
            </div>
            <span>MERCEDES-BENZ</span>
        </div>
    </td>
    <td>
        <!-- if($availability === '0')
            <button 
                type="button" 
                size="sm"
                icon="add_shopping_cart" 
                color="secondary" 
                text="В корзину" 
            /> 
        else
        endif -->
        <div
            id="card{{$href}}" 
            data-card="{{$href}},{{$vendorcode}},{{$name}},1,<?=number_format(($price) / 100, 2, '.', '')?>" 
            v-on:click="addToCard('{{$href}}')"    
        >
            <x-button 
                type="button" 
                size="sm"
                icon="add_shopping_cart" 
                color="dark" 
                text="В корзину" 
            />            
        </div>
        
    </td>
</tr>