<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/results.css">
    <title>Cálculo</title>
</head>
<body>
    <main>
        <div class="resultados">
            <h1>Resultados dos Cálculos</h1>

            <p>Valor de Imposto a Pagar: R$ <?php echo isset($_SESSION['imposto']) ? $_SESSION['imposto'] : '0,00'; ?></p>
            <p>Faixa: <?php echo isset($_SESSION['faixa']) ? $_SESSION['faixa'] : 'Faixa 0'; ?></p>
            <p>Taxa Efetiva Aplicada: <?php echo isset($_SESSION['aliquotaEfetiva']) ? $_SESSION['aliquotaEfetiva']. ' %': '0%'; ?></p>
        </div>
    </main>
</body>
</html>