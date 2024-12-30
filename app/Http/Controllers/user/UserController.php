<?php

namespace App\Http\Controllers\user;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userRegister(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|min:2',
            'prenom' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'role' => 'client',
            'date_inscription' => now(),
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('web')->login($user);
        return redirect()->route('homePage')->with('success', 'Inscription réussie !');


    }

    public function authLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === "admin") {
                return redirect()->route('adminPage');
            } elseif ($user->role === 'client') {
                return redirect()->route('homePage');
            }
        }

        return redirect()->back()->with('error', 'Identifiants incorrects !');

    }

    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('accueil');
    }
}
