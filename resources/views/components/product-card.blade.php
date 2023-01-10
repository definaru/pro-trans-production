@php
    if($image === []) {
        $img = '/img/placeholder.png';
    } else {
        $img = $image[0]['miniature']['href'];
    }
    $code = isset($vendorcode) ? $vendorcode : 'Нет данных';
    $href = isset($href) ? $href : 0;
@endphp
<tr>
    <td>
        <div class="ms-2">
            {{$id}}
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center gap-2">
            <img src="{{ $img }}" alt="{{$name}}" class="rounded image-product border border-muted" />
            <small>
                <a href="/dashboard/product/details/{{$href}}" class="name fw-bold text-decoration-none text-dark">
                    {{$name}}
                </a>
            </small>
        </div>
    </td>
    <td>
        <a href="/dashboard/product/details/{{$href}}" class="text-danger text-decoration-none">
            {{$code}}
        </a>
    </td>
    <td><small><strong>@php echo number_format(($price) / 100, 2, '.', ' ') @endphp ₽</strong></small></td>
    <td>
        <div class="d-flex gap-2">
            @role('admin')
                ({{$availability}})
            @endrole
            
            @if($availability === '0' || $availability < 0)
                <!-- <a href="#">
                    <small class="badge text-bg-secondary">Заказать</small>
                </a> -->
                <x-badge color="danger" text="Нет в наличии" />
            @else
                <x-badge color="34617" text="В наличии - {{$availability}} шт." />
            @endif            
        </div>
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
        @if($availability === '0' || $availability < 0)
        <div
            id="preorder{{$href}}"
            data-order="{{$href}},{{$code}},{{$name}},1"
            v-on:click="addToOrder('{{$href}}')"
        >
            <x-button 
                type="button" 
                size="sm"
                icon="add_shopping_cart" 
                color="secondary" 
                text="Предзаказ" 
            />             
        </div>
        @else
        <div
            id="card{{$href}}" 
            data-card="{{$href}},{{$code}},{{$name}},1,{{$price}},{{$price}}" 
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
        @endif
    </td>
</tr>