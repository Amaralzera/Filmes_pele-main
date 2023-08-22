<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        return redirect()->route('home'); // Redirecionar após o registro
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validação e autenticação do usuário
        // ...

        return redirect()->route('home'); // Redirecionar após o login
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login'); // Redirecionar após o logout
    }
}
