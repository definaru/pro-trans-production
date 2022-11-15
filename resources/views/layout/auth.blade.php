<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>@yield('title') | Проспект Транс</title>
    <link rel="shortcut icon" href='/img/prospectdesktopicon.png' type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://glyphsearch.com/bower_components/ionicons/css/ionicons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" />
    <style>
        body, html {
            font-family: 'Nunito Sans', sans-serif;
        }
        a, .text-primary {
            color: #5051c2 !important;
        }
        .btn-primary {
            background-color: #5051c2;
            border-color: #5051c2;
        }
        .h2, h2 {
            font-size: 1.5rem !important;
        } 
        .alert small {color: #673ab7}  
        .form-control:focus {
            border-color: none !important;
            outline: none !important;
            box-shadow: none !important;
        }
    </style>
</head>
<body>
    <section id="auth" class="bg-light vh-100">
        <div class="container h-100">
            <div class="d-flex align-items-center row h-100">
                <div class="col-md-4 offset-md-4 py-5">
                    <div class="card border-0 shadow bg-white">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/defina.min.js') }}"></script>
</body>
</html>