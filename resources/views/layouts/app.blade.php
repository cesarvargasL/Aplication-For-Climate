<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <button class="inicio"><a href="{{ route('login') }}">Inicio</a></button>
        <button class="usuarios"><a href="{{ route('usuarios') }}">volver atras</a></button>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>