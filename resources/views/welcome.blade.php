<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <div id="clima-container">
        <div id="contenedor">
            <div id="caja1">
                <h1 id="temperatura-valor">{{ round($weather['main']['temp']) }} ° C</h1>
                <h1 id="temperatura-descripcion">{{ $weather['weather'][0]['description'] }}</h1>
            </div>
            <div id="caja2">
                <h2 id="ubicacion">{{ $weather['name'] }}, {{ $weather['sys']['country'] }}</h2>
                <img id="icono-animado" src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}.png" alt="" height="128" width="128">
            </div>
            <div id="caja3">
                <h3>Veloc. del Viento</h3>
                <h1 id="viento-velocidad">{{ $weather['wind']['speed'] }} m/s</h1>
            </div>
        </div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Cerrar sesión
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>