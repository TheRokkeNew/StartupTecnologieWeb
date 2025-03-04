@extends('layouts.app') 
@section('content')
<style>
    body {
        background-color: #c6e9f9; 
    }
</style>
<div class="container">
    <h1 class="mb-4">Report & Statistiche</h1>    

    <!-- ricerca per filtrare le transazioni per data e categoria -->
    <form method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <input type="date" name="date" class="form-control" value="{{ request('date') }}">
            </div>
            <div class="col-md-4">
                <input type="text" name="category" class="form-control" placeholder="Categoria (Spesa, Stipendio)" value="{{ request('category') }}">

            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Filtra</button>
            </div>
        </div>
    </form>

    <!-- Tabella mostra le transazioni -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Importo</th>
                <th>Categoria</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->amount }} €</td>
                    <td>{{ $transaction->category }}</td>
                    <td>{{ $transaction->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Bottone per scaricare il report Excel -->
    <a href="{{ route('transactions.export') }}" class="btn btn-success">Download Excel</a>
</div>
@endsection