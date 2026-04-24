<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }

        auth()->login($user);

         return match ($user->role) {
        'admin' => redirect('/admin/dashboard'),
        'cliente' => redirect('/cliente/dashboard'),
        'vendor' => redirect('/vendor/dashboard'),
        default => redirect('/'),
    };
    }

    public function logout()
{
    Auth::logout();
    return redirect('/');
}
}