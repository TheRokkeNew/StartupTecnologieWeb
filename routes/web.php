<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\SelectUserController;
use App\Http\Controllers\dashboardcontroller;

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
Route::get('/dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');

// Altre route
Route::get('/interface', function () {
    return view('interfaccia');
});



Route::get('/select-user', [SelectUserController::class, 'showSelectUserPage'])->name('select-user');

//report e statistiche
//mostra la lista di transazioni con i filtri 
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
//esporta i dati in Excel 
Route::get('/transactions/export', [TransactionController::class, 'export'])->name('transactions.export');



