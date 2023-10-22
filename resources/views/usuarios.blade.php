<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/usuarios.css') }}" >
    <title>Usuarios</title>
</head>
<body>
    <main class="cuadro-login">
        <h1>Tabla usuarios</h1>
        <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->ciudad }}</td>
                    <td class="opciones">
                        <button class="btn-editar"><a class="a-editar" href="{{ route('edit', $usuario->id) }}">Editar</a></button>
                        <form method="POST" action="{{ route('delete', $usuario->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn-eliminar" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        <footer>
            <a class="a-volver" href="{{ route('login') }}">Volver al inicio de sesión</a>
        </footer>    
    </main>   
</body>
</html>
