@extends('layouts.app')

@section('content')
    <h1>Editar usuario</h1>
    <form method="POST" action="{{ route('update', $usuario->id) }}">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}">
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" value="{{ $usuario->ciudad }}">
        <button type="submit">Guardar cambios</button>
    </form>
@endsection
