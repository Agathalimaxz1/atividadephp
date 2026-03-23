<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Nome do Produto: <input type="text" name="nome" required><br>
    Preço de Custo: <input type="number" step="0.01" name="custo" required><br>
    Preço de Venda: <input type="number" step="0.01" name="venda" required><br>
    <button type="submit">Verificar Lucro/Prejuízo</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $custo = $_POST['custo'];
    $venda = $_POST['venda'];

    echo "Produto: $nome <br>";

    if ($venda > $custo) {
        $lucro = $venda - $custo;
        echo "Resultado: <strong>LUCRO</strong> de R$ " . number_format($lucro, 2, ',', '.');
    } elseif ($venda < $custo) {
        $prejuizo = $custo - $venda;
        echo "Resultado: <strong>PREJUÍZO</strong> de R$ " . number_format($prejuizo, 2, ',', '.');
    } else {
        echo "Resultado: <strong>EMPATE</strong> (Venda igual ao custo).";
    }
}
?>
</body>
</html>