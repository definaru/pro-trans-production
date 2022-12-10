@php
    if($image === []) {
        $img = '/img/no_photo.jpg';
    } else {
        $img = $image[0]['miniature']['href'];
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
            <img src="{{ $img }}" alt="{{$name}}" class="rounded image-product" />
            <small>
                <a href="/dashboard/product/details/{{$href}}" class="name fw-bold text-decoration-none text-dark">
                    {{$name}}
                </a>
            </small>
        </div>
    </td>
    <td><a href="/test/{{$vendorcode}}" class="text-danger text-decoration-none">{{$vendorcode}}</a></td>
    <td><small><strong>@php echo number_format(($price) / 100, 2, '.', ' ') @endphp ₽</strong></small></td>
    <td>
        @if($availability === '0')
            <a href="/dashboard/order/{{$modifications}}/{{$vendorcode}}">
                <small class="badge text-bg-secondary">Заказать</small>
            </a>
        @else
            <small class="badge bg-soft-success text-success px-3 py-2">В наличии - {{$availability}} шт.</small>
        @endif
    </td>
    <td>
        <div class="card-body p-0 d-flex align-items-center gap-2">
            <div class="icon-brand">
                <img src="/img/guayaquillib/mercedes-benz.png" alt="MERCEDES-BENZ COMMERCIAL" class="w-50" />
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