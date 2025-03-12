<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectUserController extends Controller
{
    // Mostra la pagina di selezione utente
    public function showSelectUserPage()
    {
        return view('select-user');
    }
}
