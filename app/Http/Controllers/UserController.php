<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UserController extends Controller
{
    public function showLoginForm()
{
    $users = Usuario::all();
    return view('user.login', compact('users'));
}


}


