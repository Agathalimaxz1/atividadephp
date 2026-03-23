<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post">
    Valor do Veículo: <input type="number" step="0.01" name="valor" required><br>
    Ano do Veículo: <input type="number" name="ano" required><br>
    <button type="submit">Calcular Desconto</button>
</form>

<?php
if ($_POST) {
    $valor = $_POST['valor'];
    $ano = $_POST['ano'];
    $desconto = 0;

    if ($ano <= 2000) {
        $desconto = $valor * 0.12;
        echo "CUIDADO: Este carro é de até 2000 (Ganhou 12% de desconto).<br>";
    } else {s
        $desconto = $valor * 0.07;
        echo "Este carro é novo (Ganhou 7% de desconto).<br>";
    }

    $valorFinal = $valor - $desconto;

    echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor a ser pago pelo cliente: R$ " . number_format($valorFinal, 2, ',', '.');
}
?>  
</body>
</html>