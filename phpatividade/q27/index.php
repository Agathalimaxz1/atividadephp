<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Valor do Veículo: <input type="number" name="valor"><br>
    Combustível: 
    <select name="tipo">
        <option value="alcool">Álcool</option>
        <option value="gasolina">Gasolina</option>
        <option value="diesel">Diesel</option>
    </select>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_POST) {
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];

    if ($tipo == "alcool") {
        $desconto = $valor * 0.25;
    } elseif ($tipo == "gasolina") {
        $desconto = $valor * 0.21;
    } else {
        $desconto = $valor * 0.14;
    }

    $total = $valor - $desconto;
    echo "Desconto: R$ $desconto | Valor a pagar: R$ $total";
}
?>
</body>
</html>