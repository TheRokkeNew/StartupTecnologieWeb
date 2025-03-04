<?php
session_start();
$conn = new mysqli("localhost", "root", "", "finance_db");
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"])) {
        $categoria = $_POST["categoria"];
        $importo = $_POST["importo"];
        $data = $_POST["data"];
        $stmt = $conn->prepare("INSERT INTO transazioni (categoria, importo, data) VALUES (?, ?, ?)");
        $stmt->bind_param("sds", $categoria, $importo, $data);
        $stmt->execute();
        $stmt->close();
    }
    if (isset($_POST["delete"])) {
        $id = $_POST["id"];
        $conn->query("DELETE FROM transazioni WHERE id=$id");
    }
}

$transazioni = $conn->query("SELECT * FROM transazioni ORDER BY data DESC");
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Finanze</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Stile generale */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            text-align: center;
        }

        h1, h2 {
            color: #333;
        }

        /* Form */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        input, button {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background: #45a049;
        }

        /* Tabella */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #f8f8f8;
        }

        .positive {
            color: green;
        }

        .negative {
            color: red;
        }

        /* Pulsanti */
        button.delete {
            background: #e74c3c;
        }

        button.delete:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gestione Finanze</h1>
        <form method="post">
            <input type="text" name="categoria" placeholder="Categoria" required>
            <input type="number" name="importo" placeholder="Importo (€)" required>
            <input type="date" name="data" required>
            <button type="submit" name="add">Aggiungi Transazione</button>
        </form>
        
        <h2>Storico Transazioni</h2>
        <table>
            <tr>
                <th>Data</th>
                <th>Categoria</th>
                <th>Importo (€)</th>
                <th>Azioni</th>
            </tr>
            <?php while ($row = $transazioni->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["data"]; ?></td>
                    <td><?php echo $row["categoria"]; ?></td>
                    <td class="<?php echo $row["importo"] < 0 ? 'negative' : 'positive'; ?>">
                        <?php echo number_format($row["importo"], 2); ?>
                    </td>
                    <td>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete" class="delete">Elimina</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>