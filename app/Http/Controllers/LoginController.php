<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/series');
        }
    
        return redirect()->back()->withErrors(['Usuário ou senha inválidos']);
    }

    public function destroy()
    {
        Auth::logout();

        return to_route('login');
    }
}
