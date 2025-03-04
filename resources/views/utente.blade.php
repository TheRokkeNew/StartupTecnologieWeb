<?php
session_start();
// Simulazione dati utente
$user = [
    "nome" => "Mario Rossi",
    "saldo" => 1200.50,
    "entrate" => 3500.00,
    "uscite" => 2300.00,
    "risparmi" => 500.00
];

$transazioni = [
    ["data" => "2025-03-01", "categoria" => "Spesa", "importo" => -50.00],
    ["data" => "2025-02-28", "categoria" => "Stipendio", "importo" => 2500.00],
    ["data" => "2025-02-25", "categoria" => "Bollette", "importo" => -150.00],
    ["data" => "2025-02-20", "categoria" => "Ristorante", "importo" => -80.00]
];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Utente</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .saldo-box {
            background: #2196f3;
            color: white;
            padding: 15px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background: #2196f3;
            color: white;
        }
        .negative { color: red; }
        .positive { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Benvenuto, <?php echo $user['nome']; ?>!</h1>
        <div class="saldo-box">
            <h2>Saldo Attuale: €<?php echo number_format($user['saldo'], 2); ?></h2>
            <p>Entrate: €<?php echo number_format($user['entrate'], 2); ?></p>
            <p>Uscite: €<?php echo number_format($user['uscite'], 2); ?></p>
            <p>Risparmi: €<?php echo number_format($user['risparmi'], 2); ?></p>
        </div>
        
        <canvas id="chart"></canvas>
        
        <h2>Transazioni Recenti</h2>
        <table>
            <tr>
                <th>Data</th>
                <th>Categoria</th>
                <th>Importo (€)</th>
            </tr>
            <?php foreach ($transazioni as $transazione): ?>
                <tr>
                    <td><?php echo $transazione["data"]; ?></td>
                    <td><?php echo $transazione["categoria"]; ?></td>
                    <td class="<?php echo $transazione["importo"] < 0 ? 'negative' : 'positive'; ?>">
                        <?php echo number_format($transazione["importo"], 2); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    <script>
        const ctx = document.getElementById('chart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Entrate', 'Uscite', 'Risparmi'],
                datasets: [{
                    data: [<?php echo $user['entrate']; ?>, <?php echo $user['uscite']; ?>, <?php echo $user['risparmi']; ?>],
                    backgroundColor: ['#4caf50', '#f44336', '#2196f3']
                }]
            }
        });
    </script>
</body>
</html>
