<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Transaction;

class TransactionsExport implements FromCollection
{
    public function collection()
    {
        return Transaction::all();
    }
}
