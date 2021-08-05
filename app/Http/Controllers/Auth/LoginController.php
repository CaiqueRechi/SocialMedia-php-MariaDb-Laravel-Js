<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)
            ->letters()
            ->mixedCase()
            ->numbers()
            ->symbols()]
        ]);

        if(!Auth::attempt($credentials)) {
            return redirect()->back()->with('error', 'Não foi possível validar as credenciais informadas.');
        }

        return redirect()->route('home')->with('success', 'Bem-vindo(a) ao nosso sistema.');
    }
}
