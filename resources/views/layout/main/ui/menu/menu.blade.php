@if ($_SERVER['REQUEST_URI'] === '/')
<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="/about">
            О компании
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#bestsellers">
            Хиты продаж
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/products/mersedes-benz">
            Запасные части
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#brand">
            Бренды
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#advantages">
            Преимущества
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact">
            Контакты
        </a>
    </li>
</ul>                        
@else
<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/about') ? ' active' : '';?>" href="/about">
            О компании
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/products/mersedes-benz') ? ' active' : '';?>" href="/products/mersedes-benz">
            Запасные части
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/customers') ? ' active' : '';?>" href="/customers">
            Клиентам
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/doc') ? ' active' : '';?>" href="/doc">
            Документы
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/contact') ? ' active' : '';?>" href="/contact">
            Контакты
        </a>
    </li>
</ul> 
@endif