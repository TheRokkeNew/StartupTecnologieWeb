@extends('layouts.app')

@section('title', 'Seleziona Utente - FamilyFinance')

@section('content')
<div class="container">
    <!-- Titolo della Pagina -->
    <h1 class="text-center mt-4 mb-5">FAMILY FINANCE</h1>

    <!-- Lista degli Utenti -->
    <div class="row justify-content-center">
        <!-- Utente: Papà -->
        <div class="col-md-3 mb-4">
            <a href="#" class="card text-center p-3 text-decoration-none" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('res/dad.png') }}" alt="Papà" class="rounded-circle mb-3" width="120" height="120">
                    <h5 class="card-title">PAPA</h5>
                </div>
            </a>
        </div>

        <!-- Utente: Mamma -->
        <div class="col-md-3 mb-4">
            <a href="#" class="card text-center p-3 text-decoration-none" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('res/mom.png') }}" alt="Mamma" class="rounded-circle mb-3" width="120" height="120">
                    <h5 class="card-title">MAMMA</h5>
                </div>
            </a>
        </div>

        <!-- Utente: Sorella -->
        <div class="col-md-3 mb-4">
            <a href="#" class="card text-center p-3 text-decoration-none" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('res/sister.png') }}" alt="Sorella" class="rounded-circle mb-3" width="120" height="120">
                    <h5 class="card-title">SORELLA</h5>
                </div>
            </a>
        </div>

        <!-- Utente: Fratello -->
        <div class="col-md-3 mb-4">
            <a href="#" class="card text-center p-3 text-decoration-none" style="width: 18rem;">
                <div class="card-body">
                    <img src="{{ asset('res/brother.png') }}" alt="Fratello" class="rounded-circle mb-3" width="120" height="120">
                    <h5 class="card-title">FRATELLO</h5>
                </div>
            </a>
        </div>
    </div>

</div>
@endsection