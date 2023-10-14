<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>login</h1>
    <form method="POST" action="{{ route('login') }}">
    <div class="form-group">
        <label for="username">Usuario</label>
        <select id="username" class="form-control" name="username" required>
            @foreach (\App\Models\Usuario::all() as $user)
                <option value="{{ $user->id }}">{{ $user->nombre }}</option>
            @endforeach
        </select>
    </div>
    <h3>Seleccione su nombre</h3>
    <select name="usuario" id="usuario">
        <option value="">Cesar</option>
    </select>
    <br>
    <a href="{{ route('welcome') }}" class="btn btn-primary">Ir a la Bienvenida</a>
</form>

</body>
</html>