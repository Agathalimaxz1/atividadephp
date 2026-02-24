<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="index.php" method="get">
    <label>nome:</label>
    <input type="number" name="num1" required>
    
    <label>salario:</label>
    <input type="number" name="num2" required>
    <label> vendas: </label>
    <input type="number" name = "num3" required>
    
    <button type="submit">Calcular</button>
</form>
<?php
$nome = $_get['nome'];
$salario = $_GET['salario'];
$vendas = $_GET['vendas'];
$comissao = $vendas * 0.15;
$total = $salario + $comissao;
echo "nome: " . $nome <br>;
echo "salario: " . $salario . <br>;
echo "salario final: " . $total;
?>
</body>
</html>