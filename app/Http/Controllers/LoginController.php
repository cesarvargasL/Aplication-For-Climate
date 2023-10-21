<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        $usuarios = Usuario::all();
        //dd($usuarios);
        return view('login', compact('usuarios'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Sesión cerrada exitosamente.');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        $usuario = new Usuario;
        $usuario->nombre = $request->input('nombre');
        $usuario->ciudad = $request->input('ciudad');
        $usuario->save();

        return redirect()->route('login')->with('success', 'Usuario registrado exitosamente.');
    }

    public function edit(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        return view('edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
        ]);

        $usuario = Usuario::find($id);
        $usuario->nombre = $request->input('nombre');
        $usuario->ciudad = $request->input('ciudad');
        $usuario->save();

        return redirect()->route('usuarios')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function delete(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect()->route('usuarios')->with('success', 'Usuario eliminado exitosamente.');
    }
}
?>
