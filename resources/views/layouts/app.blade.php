<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('login') }}">Inicio</a></li>
            <li><a href="{{ route('usuarios') }}">Usuarios</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>