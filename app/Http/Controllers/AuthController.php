<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
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
        $credentials = $request->only('name', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/redirect');
        }

        return back()->withErrors(['name' => 'Vos identifiants ou vôtre mot de passe sont incorrects'],);
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
            $username = Auth::user()->name;
            // dd($username);

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Connexion reussie, Bienvenue '. ' ' . $username);
            } elseif ($user->role == 'user') {
                return redirect()->route('user.dashboard')->with('success', 'Connexion reussie, Bienvenue'. $username);
            }else{
                // Redirige vers la page de connexion si l'utilisateur n'est pas authentifié
                return redirect()->route('login')->with('error', 'votre tentative de connexion a échouer');
            }
        }



    }

}
