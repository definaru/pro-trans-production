<div>
    <p>
        <img src="https://raw.githubusercontent.com/definaru/prospekt-trans/main/prospectdesktopicon.png" style="width: 100px" alt="Проспект Транс" />
    </p>
    <h2>Здравствуйте, {{ $name }}</h2> 
    <p>Вы получили данное письмо, потому что зарегистрировались на сайте {{ config('app.url') }}</p>
    <p><br /></p>
    <p><strong>Логин:</strong> <br />{{ $login }}</p>
    <p><strong>Ваш временный пароль:</strong> <br />{{ $password }}</p>
    <p style="color: red">ОБЯЗАТЕЛЬНО ПОМЕНЯЙТЕ ПАРОЛЬ ПОСЛЕ ВХОДА !</p>
    <hr/>
    <p>
        <small style="color: #999">
            © {{ date('Y') }} - {{ config('app.name') }}. @lang('Все права защищены.')
        </small>
    </p>
</div>