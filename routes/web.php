<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.login');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::post('/logout', 'LogoutController@logout')->name('logout');

Route::get('/login', 'UserController@showLoginForm')->name('login');

Route::get('/users', [UserController::class, 'index']);
