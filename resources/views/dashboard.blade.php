<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Utente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">

<div class="container mt-4">
    <h1 class="text-center">Benvenuto, {{ $user['nome'] }}!</h1>
    
    <div class="row">
        <!-- Riepilogo Finanziario -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Saldo Attuale</h5>
                    <p class="card-text fs-3">€{{ number_format($user['saldo'], 2) }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Entrate</h5>
                    <p class="card-text fs-3">€{{ number_format($user['entrate'], 2) }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Uscite</h5>
                    <p class="card-text fs-3">€{{ number_format($user['uscite'], 2) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafico Finanziario -->
    <div class="card mb-4">
        <div class="card-body">
            <canvas id="financeChart"></canvas>
        </div>
    </div>

    <!-- Transazioni Recenti -->
    <div class="card">
        <div class="card-header bg-secondary text-white">Transazioni Recenti</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Categoria</th>
                        <th>Importo (€)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transazioni as $transazione)
                        <tr>
                            <td>{{ $transazione->data }}</td>
                            <td>{{ $transazione->categoria }}</td>
                            <td class="{{ $transazione->importo < 0 ? 'text-danger' : 'text-success' }}">
                                €{{ number_format($transazione->importo, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    const ctx = document.getElementById('financeChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Entrate', 'Uscite', 'Risparmi'],
            datasets: [{
                data: [{{ $user['entrate'] }}, {{ $user['uscite'] }}, {{ $user['risparmi'] }}],
                backgroundColor: ['#28a745', '#dc3545', '#007bff']
            }]
        }
    });
</script>

</body>
</html>

