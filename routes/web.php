<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ExportController;

//homepage
Route::get('/', function () {
    return view('homepage');
})->name('homepage');;

// Route di autenticazione predefinite di Laravel
Auth::routes();

// Route personalizzate
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Altre route
Route::get('/interface', function () {
    return view('interfaccia');
});

// Route per la home (dopo il login)
Route::get('/home', [HomeController::class, 'index'])->name('home');


//report e statistiche
//mostra la lista di transazioni con i filtri 
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
//esporta i dati in Excel 
Route::get('/transactions/export', [TransactionController::class, 'export'])->name('transactions.export');