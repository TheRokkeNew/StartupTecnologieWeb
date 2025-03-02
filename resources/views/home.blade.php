@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="display-4">Benvenuto su Family Finance</h1>
    <p class="lead">Gestisci le finanze della tua famiglia in modo semplice ed efficace.</p>
    
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm p-4">
                <h3>📊 Controllo Completo</h3>
                <p>Monitora entrate, spese e risparmi con un'interfaccia intuitiva.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-4">
                <h3>🔔 Notifiche Intelligenti</h3>
                <p>Ricevi promemoria per scadenze e report settimanali automatici.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-4">
                <h3>🔐 Sicurezza Garantita</h3>
                <p>I tuoi dati sono protetti con crittografia avanzata.</p>
            </div>
        </div>
    </div>
    
    <a href="{{ route('/register') }}" class="btn btn-primary btn-lg mt-4">Registrati</a>
    <a href="{{ route('/login') }}" class="btn btn-secondary btn-lg mt-4">Accedi</a>
</div>
@endsection