<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">
    Custo de Fábrica do Carro (R$): <input type="number" step="0.01" name="custo_fabrica" required><br>
    <button type="submit">Calcular Custo Final</button>
</form>

<?php
if ($_POST) {
    $custoFabrica = $_POST['custo_fabrica'];

    $impostos = $custoFabrica * 0.45;
    $distribuidor = $custoFabrica * 0.28;

    $custoConsumidor = $custoFabrica + $impostos + $distribuidor;

    echo "O custo final ao consumidor é: R$ " . number_format($custoConsumidor, 2, ',', '.');
}
?> 
</body>
</html>