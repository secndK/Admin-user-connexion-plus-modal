<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    //fonction pour afficher la page de login 'login' présente dans le fichier auth

    public function showLoginForm(){
        return view('auth.login');
    }


    //fonction implémentant la logique derrière la connection en comparant les mot de passe et les emails

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/redirect');
        }

        return back()->withErrors(['email' => 'Les emails sont guez'],);
    }


    //fonction implémentant la logique de déconnection


    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }




    //fonction de redirection vers le dashboard

    public function redirectToDashboard()
    {

        if (Auth::check()) { // Vérifie si l'utilisateur est authentifié
            $user = Auth::user(); // Récupère l'utilisateur authentifié

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->route('user.dashboard');
            }
        }

        // Redirige vers la page de connexion si l'utilisateur n'est pas authentifié
        return redirect()->route('login');

    }

}
