<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') / Проспект Транс </title>
    <link rel="shortcut icon" href='/img/prospectdesktopicon.png' type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/defina.min.css') }}" />
</head>
<body>

    <div id="admin" :class="[isOpen ? 'panel' : 'panel-close']" class="d-print-block">
        @include('layout.main.aside')
        <div class="bg-light content d-print-table w-100">
            @include('layout.main.header')
            <section style="overflow-y: scroll;height: 81vh" class="d-print-table w-100">
                <div class="container d-print-table">
                    <div class="row d-print-table">
                        <div class="col-md-12 mt-5 d-print-table">
                            <main class="px-3 pb-5 d-print-block">
                                <div class="d-print-none">
                                    @yield('breadcrumbs')
                                </div>
                                @include('layout.main.company')
                                @yield('content')
                            </main>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="border-top p-3 mb-2 d-print-none">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-muted text-center m-0">
                                <small>Copyright &copy; {{ date('Y') }} 
                                    &middot; Все права защищены. 
                                    &middot; <span class="text-dark">{{ config('app.name') }}</span>
                                    | {{ config('app.email') }}
                                    &middot; <a href="#">Политика конфиденциальности</a>
                                </small>
                            </p>                            
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/defina.admin.min.js') }}"></script>
</body>
</html>