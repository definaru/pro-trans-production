@extends('layout/index', [
    'title' => 'Информация по заказу',
    'keywords' => 'корзина, service, компания, автосервис, мерседес бенц, актрос',
    'description' => 'Информация для покупателя.',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])

@section('title', 'Информация по заказу')

@section('content')
<div class="w-100 bg-primary" style="height: 170px">
    <div class="d-flex align-items-center justify-content-center h-100" style="background-color: #00000059">
        <h2 class="text-white pt-5 mb-0 mt-1">Информация по заказу</h2>
    </div>
</div>
<section class="bg-secondary-subtle pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(session('error'))
                    <strong class="text-danger">{{session('error')}}</strong>
                @endif
                <p>{{$uuid}}</p>
                @if(session('data'))
                    <h2 class="text text-dark fw-bold">Здравствуйте, {{session('data')['name']}}</h2>
                    @if(session('order'))
                        <h4 id="neworder">Ваш заказ №{{session('order')}}</h4>
                        @if (session('data')['actualAddress'] === '...')
                            <p>Адрес доставки не указан.</p>
                        @else
                            <p><strong>Адрес доставки:</strong> {{session('data')['actualAddress']}}</p>
                        @endif 
                        <?php /*
                        <p>На ваш e-mail: <u>{{session('data')['email']}}</u> пришёл 4-х значный код подтверждения.</p>
                        <div>
                            <label class="fw-bold">4-х значный код из e-mail</label>
                            <input type="text" class="form-control w-25" placeholder="XXXX" />
                        </div>     
                        @if(session('order'))
                            <p><a href="/order/{{session('id')}}" target="_blank" rel="noopener noreferrer">Детали заказа</a></p>
                        @endif                                           
                        */ ?>
                    @endif
                @else
                <p><span class="text badge text-bg-success">Ваш заказ принят.</span></p>
                @endif
                <p class="text">
                    Вы можете связаться с нашим менеджером: 
                    <br />
                    <a href="tel:+79017331866" class="text-decoration-none fw-bold text text-dark">+7 (901) 733-18-66</a>
                </p>
                @{{newOrder}}
            </div>
        </div>
    </div>
</section>
@endsection