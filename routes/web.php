<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;

use App\Models\Usuario;



Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/welcome', [WelcomeController::class, 'showWelcomePage'])->name('welcome');
Route::get('/clima/{ciudad}', function ($ciudad) {
    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=$ciudad&lang=es&units=metric&appid=c83f26f0e4757dff05ca66433d246020");
    return $response->json();
});
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/edit/{id}', [LoginController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [LoginController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [LoginController::class, 'delete'])->name('delete');
Route::get('/usuarios', function () {
    $usuarios = Usuario::all();
    return view('usuarios', compact('usuarios'));
})->name('usuarios');
?>
