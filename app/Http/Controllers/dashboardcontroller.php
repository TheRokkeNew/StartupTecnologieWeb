<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index() {
        // Simulazione dati utente
        $user = [
            "nome" => "Mario Rossi",
            "saldo" => 1200.50,
            "entrate" => 3500.00,
            "uscite" => 2300.00,
            "risparmi" => 500.00
        ];

        $transazioni = [
            ["data" => "2025-03-01", "categoria" => "Spesa", "importo" => -50.00],
            ["data" => "2025-02-28", "categoria" => "Stipendio", "importo" => 2500.00],
            ["data" => "2025-02-25", "categoria" => "Bollette", "importo" => -150.00],
            ["data" => "2025-02-20", "categoria" => "Ristorante", "importo" => -80.00]
        ];

        // Caricare la vista della dashboard
        //require_once __DIR__ . '/../Views/dashboard.php';
        return view('dashboard');
    }
}


    
