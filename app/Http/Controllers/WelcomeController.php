<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Usuario;

class WelcomeController extends Controller
{
    public function showWelcomePage(Request $request)
    {
        $usuario = Usuario::find($request->input('usuario'));
        $ciudad = $usuario->ciudad;
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$ciudad&lang=es&units=metric&appid=c83f26f0e4757dff05ca66433d246020");
        $weather = $response->json();
        return view('welcome', compact('weather'));
    }
}