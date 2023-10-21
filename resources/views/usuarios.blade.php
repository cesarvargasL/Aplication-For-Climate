<table border=1>
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
                <td>
                    <a href="{{ route('edit', $usuario->id) }}">Editar</a>
                    <form method="POST" action="{{ route('delete', $usuario->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<footer>
        <a href="{{ route('login') }}">Volver al inicio de sesión</a>
</footer>