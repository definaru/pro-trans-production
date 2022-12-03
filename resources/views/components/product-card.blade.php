@php
    $data = $img::Image($href);
    $image = '';
    try {
        if(empty($data['rows'])) {
            $image = '/img/no_photo.jpg';
        } else {
            $image = $data['rows'][0]['miniature']['href'];
        }
    } catch (\Exception $e) {
        echo 'Error: ',  $e->getMessage();
    }
@endphp
<tr>
    <td>
        <div class="form-check mb-0 ms-2">
            <input type="checkbox" class="form-check-input" />
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center gap-2">
            <img src="{!! $image !!}" alt="{{$name}}" class="rounded image-product" /> 
            <small>
                <a href="{{$href}}" class="name fw-bold text-decoration-none text-dark">
                    {{$name}}
                </a>
            </small>
        </div>
    </td>
    <td><a href="/test/{{$vendorcode}}" class="text-decoration-none">#{{$vendorcode}}</a></td>
    <td><small><strong>@php echo number_format(($price) / 100, 2, '.', ' ') @endphp ₽</strong></small></td>
    <td>
        @if($availability === '0')
            <a href="/dashboard/order/{{$modifications}}/{{$vendorcode}}">
                <small class="badge text-bg-secondary">Заказать</small>
            </a>
        @else
            <small class="badge text-bg-success">в наличаи</small>
        @endif
    </td>
    <td>
        <div class="card-body p-0 d-flex align-items-center gap-2">
            <div class="icon-brand">
                <img src="/img/guayaquillib/mercedes-benz.png" alt="MERCEDES-BENZ COMMERCIAL" class="w-100" />
            </div>
            <span>MERCEDES-BENZ</span>
        </div>
    </td>
    <td>
        @if($availability === '0')
            <button class="other-features btn btn-outline-secondary btn-sm" disabled>В корзину</button>
        @else
            <button class="other-features btn btn-outline-dark btn-sm">В корзину</button>
        @endif
    </td>
</tr>