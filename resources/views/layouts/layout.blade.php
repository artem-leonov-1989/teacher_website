<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('title_name')</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @foreach($menuList as $list)
                <li class="nav-item">
                    <a class="nav-link menu-link" aria-current="page"
                       href="{{ route($list->route) }}">{{ $list->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
<div class="container-fluid">
    @yield('content')
</div>
</body>
</html>
