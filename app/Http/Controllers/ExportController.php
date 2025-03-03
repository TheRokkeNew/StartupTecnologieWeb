<?php

namespace App\Http\Controllers;

use App\Models\User; // Modello di esempio, puoi usare il tuo modello
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class ExportController extends Controller
{
    public function export()
    {
        // Esporta i dati usando un file export
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
