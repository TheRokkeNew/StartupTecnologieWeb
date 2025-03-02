<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction; //modello
use Maatwebsite\Excel\Facades\Excel; //libreria x esportazione in Excel
use App\Exports\TransactionsExport; //classe gestisce export 

class TransactionController extends Controller
{
    //Recupera e filtra le transazioni in base alla categoria e alla data
    public function index(Request $request)
    {
        $query = Transaction::query(); //recupera tutte transazioni

        // Filtra per categoria
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        // Filtra per data
        if ($request->filled('date')) {
            $query->whereDate('date', $request->date);
        }

        $transactions = $query->get(); // Recupera transazioni dal database

        return view('transactions.index', compact('transactions')); // Ritorna la vista con i dati
    }

    //Esporta tutte le transazioni in un file Excel
    public function export()
    {   
        return Excel::download(new TransactionsExport, 'transactions.xlsx');
    }
}