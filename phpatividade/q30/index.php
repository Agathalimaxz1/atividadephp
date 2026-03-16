<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Nome do funcionário: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    Salário Fixo: <input type="number" step="0.01" name="salario" required><br>
    Sexo (M para Masculino / F para Feminino): <input type="text" name="sexo" required><br>
    <button type="submit">Calcular Salário Líquido</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $salarioFixo = $_POST['salario'];
    $sexo = strtoupper($_POST['sexo']); 
    $abono = 0;


    if ($sexo == "M") {
        if ($idade >= 30) {
            $abono = 100.00; 
        } else {
            $abono = 50.00; 
        }
    } elseif ($sexo == "F") {
        if ($idade >= 30) {
            $abono = 200.00; 
        } else {
            $abono = 80.00;  
        }
    }

    $salarioLiquido = $salarioFixo + $abono;

    echo "Nome: " . $nome . "<br>";
    echo "Salário Líquido: R$ " . number_format($salarioLiquido, 2, ',', '.');
}
?>
</body>
</html>