@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: #c6e9f9; 
    }
</style>
<div class="container text-center py-5">
    <h1 class="mb-4">Benvenuto su FamilyFinance</h1>
    <p class="lead">✅ Gestisci le tue finanze familiari in modo semplice ed efficace 🏡</p>
    
    <div class="row mt-5">        
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">📊 Grafici e report dettagliati 📈</h5>
                    <p class="card-text">Analizza l’andamento finanziario con statistiche e report esportabili</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🎯 Obiettivi di risparmio personalizzati 💰</h5>
                    <p class="card-text">Imposta target finanziari e segui i tuoi progressi</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">🔒 Accesso sicuro e condivisione controllata 👨‍👩‍👧</h5>
                    <p class="card-text">Ogni membro ha il proprio ruolo con permessi personalizzati</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-3">Registrati</a>
        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg">Accedi</a>
    </div>
</div>
@endsection
