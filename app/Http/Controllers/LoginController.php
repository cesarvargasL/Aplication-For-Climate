<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        $usuarios = Usuario::all();
        return view('login', compact('usuarios'));
    }
}
