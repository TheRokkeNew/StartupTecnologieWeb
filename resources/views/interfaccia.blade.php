@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container py-5 content">
        <!-- Header -->
        <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('/res/dad.png') }}" alt="User Avatar" width="64" height="64">
            <div>
                <h1 class="h4">Ciao, Mario Rossi!</h1>
                <p class="text-muted">Gestisci le tue finanze familiari con facilità.</p>
            </div>
        </div>

        <!-- Financial Overview -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h5">Panoramica Finanziaria</h2>
                <div class="row text-center mt-3">
                    <div class="col-md-4">
                        <i class="bi bi-currency-euro text-success fs-3"></i>
                        <p class="fw-bold">€5,230</p>
                        <p class="text-muted">Saldo Totale</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-bar-chart text-primary fs-3"></i>
                        <p class="fw-bold">€1,200</p>
                        <p class="text-muted">Spese Mensili</p>
                    </div>
                    <div class="col-md-4">
                        <i class="bi bi-people text-secondary fs-3"></i>
                        <p class="fw-bold">4 membri</p>
                        <p class="text-muted">Famiglia</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Savings Goal -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="h5">Obiettivo di Risparmio</h2>
                <p class="text-muted">Vacanza estiva - €3,000</p>
                <div class="progress" style="height: 10px;">
                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted small mt-2">65% completato</p>
            </div>
        </div>

        <!-- Actions -->
        <div class="d-flex gap-3">
            <button class="btn btn-primary flex-grow-1">Aggiungi Transazione</button>
            <button class="btn btn-outline-secondary flex-grow-1">Gestisci Famiglia</button>
        </div>
    </div>

</div>
@endsection