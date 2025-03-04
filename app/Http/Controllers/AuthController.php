<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostra il form di login
    public function showLoginForm()
    {
        return view('login');
    }

    // Gestisce il login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticazione riuscita
            return redirect()->intended('/select-user');
        }

        // Autenticazione fallita
        return back()->withErrors([
            'email' => 'Credenziali non valide.',
        ]);
    }

    // Mostra il form di registrazione
    public function showRegistrationForm()
    {
        return view('register');
    }
}
