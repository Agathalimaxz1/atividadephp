<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Preço de Custo (R$): <input type="number" step="0.01" name="custo" required><br>
    Percentual de Acréscimo (%): <input type="number" step="0.01" name="percentual" required><br>
    <button type="submit">Calcular Preço de Venda</button>
</form>

<?php
if ($_POST) {
    $custo = $_POST['custo'];
    $percentual = $_POST['percentual'];

    $valorVenda = $custo + ($custo * ($percentual / 100));

    echo "O preço de venda é: R$ " . number_format($valorVenda, 2, ',', '.');
}
?>
</body>
</html>