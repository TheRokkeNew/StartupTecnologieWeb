<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transazione;

class DashboardController extends Controller
{
    public function index()
    {
        // Simulazione dati utente
        $user = [
            "nome" => "Mario Rossi",
            "saldo" => 1200.50,
            "entrate" => 3500.00,
            "uscite" => 2300.00,
            "risparmi" => 500.00
        ];

        // Recupera le transazioni recenti
        $transazioni = Transazione::orderBy('data', 'desc')->take(5)->get();

        return view('dashboard', compact('user', 'transazioni'));
    }
}