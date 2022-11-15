<tr>
    <td>
        <div class="form-check mb-0 ms-3">
            <input type="checkbox" class="form-check-input" />
        </div>
    </td>
    <td>
        <div class="avatar avatar-xs d-flex align-items-center gap-2">
            <img src="/img/no_photo.jpg" alt="" class="rounded" style="width: 50px;" /> 
            <small>
                <a href="#" class="name fw-bold text-decoration-none text-dark">
                    {{$name}}
                </a>
            </small>
        </div>
    </td>
    <td><a href="/test/{{$vendorcode}}" class="text-decoration-none">#{{$vendorcode}}</a></td>
    <td><small>@php echo number_format($price, 2, '.', ' ') @endphp ₽</small></td>
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
    <td><button class="other-features btn btn-outline-dark btn-sm">В корзину</button></td>
</tr>


<?php /*
<tr>
    <td>
        <div class="form-check mb-0 ms-3">
            <input type="checkbox" class="form-check-input" />
        </div>
    </td>
    <td>
        <div class="avatar avatar-xs d-flex align-items-center gap-2">
            <img src="/img/no_photo.jpg" alt="" class="rounded" style="width: 50px" /> 
            <small>
                <a href="#" class="name fw-bold text-decoration-none text-dark">{{$name}}</a>
            </small>
        </div>
    </td>
    <td><span class="badge rounded-pill text-bg-primary">{{$model}}</span></td>
    <td>
        <a href="/test/{{$mvs}}" class="text-decoration-none">#{{$mvs}}</a>
    </td>
    <td><small>{{$mvsdesc}}</small></td>
    <td><small>{{$displacement}}</small> </td>
    <td><small>{{$power}}</small></td>
    <td><small>{{$drive}}</small></td>
    <td><small>{{$bodyworktype}}</small></td>
    <td><small>{{$fuel}}</small></td>
    <td><small>{{$trimlevel}}</small> </td>
    <td>
        <button class="other-features btn btn-outline-dark btn-sm">
            Показать
        </button>
    </td>
</tr>
*/ ?>
