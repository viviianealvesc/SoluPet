<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Método para login
    public function login(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Credenciais a serem verificadas
        $credentials = $request->only('email', 'password');

        // Tentativa de login
        if (Auth::guard('tutor')->attempt($credentials)) {
            // Login bem-sucedido
            return redirect()->route('dashboard'); // Redireciona para a rota 'dashboard'
        } else {
            // Se a autenticação falhar
            return redirect()->back()->withErrors(['email' => 'Credenciais inválidas']);
        }
    }
}
