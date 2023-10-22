<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}" >
    <title>Editar</title>
</head>
<body>
    <main>

        <div class="contenedor">
            <h1>Editar usuario</h1>
            <form method="POST" action="{{ route('update', $usuario->id) }}">
                @csrf
                @method('PUT')
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}">
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" value="{{ $usuario->ciudad }}">
                <button class="btn-guardar" type="submit">Guardar cambios</button>
            </form>
        </div>
        <div class="opciones">
            @extends('layouts.app')
            @section('content')
            @endsection
        </div>
    </main>
</body>
</html>
