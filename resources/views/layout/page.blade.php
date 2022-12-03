<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href='/img/prospectdesktopicon.png' type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <style>
        ul, li {
            list-style-type: none;
            margin-bottom: 15px;
            padding-left: 0;
        }
    </style>
</head>
<body class="bg-white">
    <div class="py-5 mb-5">
        <div class="container">
            <a href="/" class="material-symbols-outlined text-decoration-none">keyboard_backspace</a>
            <h1 class="text-center">@yield('title')</h1>
            @yield('content')
        </div>
    </div>
</body>
</html>