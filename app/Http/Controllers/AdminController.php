<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{

     // La méthode index pour afficher le dashboard admin
     public function index()
     {
         return view('admin.dashboard'); // Assure-toi que la vue existe
     }

}
