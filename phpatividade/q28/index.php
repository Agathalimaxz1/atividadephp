<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Nome: <input type="text" name="nome"><br>
    Salário Atual: <input type="number" name="salario"><br>
    Valor Salário Mínimo: <input type="number" name="minimo"><br>
    <button type="submit">Reajustar</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $minimo = $_POST['minimo'];
    
    $qtdMinimos = $salario / $minimo;

    if ($qtdMinimos < 3) $percentual = 0.50;
    elseif ($qtdMinimos <= 10) $percentual = 0.20;
    elseif ($qtdMinimos <= 20) $percentual = 0.15;
    else $percentual = 0.10;

    $reajuste = $salario * $percentual;
    $novoSalario = $salario + $reajuste;

    echo "Funcionário: $nome<br>";
    echo "Reajuste: R$ $reajuste<br>";
    echo "Novo Salário: R$ $novoSalario";
}
?>
</body>
</html>