<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label for="usuario">Usuario:</label>
        @if (isset($usuarios))
            <select name="usuario" id="usuario">
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>
        @endif
        <br><br>
        <input type="submit" value="Ingresar">
    </form>
    <div>
        <button id="btn-registrar" type="button">Registrar nuevo usuario</button>
    </div>

    <div id="form-registro" style="display: none;">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>

            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" required>
            </div>

            <div>
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
    <div>
        <a href="{{ route('usuarios') }}">Ver usuarios</a>
    </div>
    <script>
        var btnRegistrar = document.getElementById('btn-registrar');
        var formRegistro = document.getElementById('form-registro');

        btnRegistrar.addEventListener('click', function() {
            formRegistro.style.display = 'block';
        });
    </script>
</body>
</html>