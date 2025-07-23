<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('login');
    }

    public function showRegisterForm() {
        return view('register');
    }

    public function register(Request $request) {
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

        return redirect()->route('login')->with('success', 'Acc. created, now log in');
    }

    public function login(Request $request) {
    $credentials = $request->only('email', 'password');
    $remember = $request->has('remember'); // o sa verifice daca e bifat checkboxul asta pt sesiune

    if (Auth::attempt($credentials, $remember)) {
        // logare de test
        return redirect()->route('product.index'); // prima pagina a aplicatiei
    }

    // nu e bun loginu si esueaza
    return back()->withErrors([
        'email' => 'Incorrect credentials',
    ])->withInput();
    }
}
