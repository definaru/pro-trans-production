@if(session('data'))
    <h2>Здравствуйте, {{session('data')['name']}}</h2>
    <pre><?php //var_dump(session('data'));?></pre>
@endif
@if(session('order'))
    <h4>Ваш заказ №{{session('order')}}</h4>
    <p>На ваш e-mail: {{session('data')['email']}} пришёл 4-х значный пароль подтверждения.</p>
    <input type="text" name="" value="{{session('data')['code']}}" />
    @if (session('data')['actualAddress'] === '...')
        <p>Адрес доставки не указан.</p>
    @else
        <p><strong>Адрес доставки:</strong> {{session('data')['actualAddress']}}</p>
    @endif
@endif
@if(session('order'))
    <p>{{session('id')}}</p>
@endif