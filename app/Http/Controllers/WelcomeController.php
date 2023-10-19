<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function showWelcomeForm(Request $request)
    {
        $usuario = Usuario::where('nombre', $request->input('username'))->first();
        $ciudad = $usuario->ciudad;
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$ciudad&lang=es&units=metric&appid=c83f26f0e4757dff05ca66433d246020");
        $weather = $response->json();
        return view('welcome', compact('weather'));
    }
    
}