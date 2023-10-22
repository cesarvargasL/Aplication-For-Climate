<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" >
    <title>Iniciar sesión</title>
</head>
<body>
    <main class="cuadro-login">
    <header>
        <h1>Iniciar sesión</h1>
    </header>
    <section >
        <form class="ingreso-usuarios" action="{{ route('welcome') }}" method="post">
            @csrf
            <label for="usuario">Seleccione su usuario:</label>
            <br>
            @if (isset($usuarios))
                <select name="usuario" id="usuario">
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            @endif
            <br>
            <button class="botones ingresar" type="submit">Ingresar</button>
        </form>
    </section>
    <footer class="opciones">
        <button class="botones registrar" id="btn-registrar" type="button">Crear nuevo usuario</button>
        <button class="botones ver-usuarios"><a href="{{ route('usuarios') }}" class="ver-usuarios">Ver usuarios</a></button>
    </footer>
    <aside >
        <div id="form-registro" class="cuadro-registro nuevo-registro">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <br>
                <div>
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" name="ciudad" id="ciudad" required>
                </div>

                <div class="btn-registro">
                    <button class="botones" type="submit">Registrar</button>
                    <button class="cancelar botones" id="btn-cancelar" type="button">Cancelar</button>
                </div>
            </form>
        </div>
    </aside>
    <article>
        “El clima es una fuerza externa que tiene un impacto en nuestras vidas todos los días”. - <a href="https://en.wikipedia.org/wiki/Shepard_Smith" target=_blank class="biografia">Shepard Smith.</a> 
    </article>
    </main>
    <script>
        var btnRegistrar = document.getElementById('btn-registrar');
        var btnCancelar = document.getElementById('btn-cancelar');
        var formRegistro = document.getElementById('form-registro');

        btnRegistrar.addEventListener('click', function() {
            formRegistro.style.display = 'block';
            btnCancelar.style.display = 'block';
        });

        btnCancelar.addEventListener('click', function() {
            formRegistro.style.display = 'none';
            btnCancelar.style.display = 'none';
        });
    </script>
</body>
</html>