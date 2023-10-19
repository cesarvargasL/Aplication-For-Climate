<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label for="username">Seleccione su nombre:</label>
        <select name="username" id="username">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->nombre }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
    <br>
    <a href="{{ route('welcome') }}">Ir a la Bienvenida</a>
</body>
</html>