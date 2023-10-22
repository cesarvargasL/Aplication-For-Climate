<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clima</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" >
</head>
<script src="{{ asset('js/hora.js') }}"></script>
<body>
    <main>
        <header>
            <div>
                <h1>Bienvenido</h1>
                <h1 id="hora-actual"></h1>
                <h1 id="fecha-actual"></h1>
            </div>
            <div>
                <h2 id="ubicacion" class="ubicacion">{{ $weather['name'] }}, {{ $weather['sys']['country'] }}</h2>
            </div>
            <div>
                <button class="cerrar-sesion">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                    @csrf
                    </form>
                </button>
                
            </div>    
        </header>
        <footer>
                <div id="caja1" class="f-item1">
                    <div>
                        <img id="icono-animado" src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}.png" alt="" height="158" width="158">
                    </div>
                    <div>
                        <h1>Hoy</h1>
                        <span><h1 id="temperatura-valor">{{ round($weather['main']['temp']) }} ° C</h1><span>
                    </div>  
                </div>
                <div id="caja2">
                    <h2>Descripion</h2>
                    <h1 id="temperatura-descripcion">{{ $weather['weather'][0]['description'] }}</h1>
                </div>
                <div id="caja3">
                    <h3>Velocidad del Viento</h3>
                    <h1 id="viento-velocidad">{{ $weather['wind']['speed'] }} m/s</h1>
                </div>
            
        </footer>
    </main>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>