<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('auth.login');
});





// route d'authentification

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//les routes de redirection

// La route vers le dashboard admin
Route::middleware('auth')->get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// La route vers le dashboard user
Route::middleware('auth')->get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');

// Redirection après connexion
Route::middleware('auth')->get('/redirect', [AuthController::class, 'redirectToDashboard']);





