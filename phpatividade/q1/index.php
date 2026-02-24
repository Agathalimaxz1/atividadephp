<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
    <label>Número 1:</label>
    <input type="number" name="num1" required>
    
    <label>Número 2:</label>
    <input type="number" name="num2" required>
    
    <button type="submit">calcular</button>
</form>

<?php

    $n1 = $_GET['num1'] ?? 0;
    $n2 = $_GET['num2'] ?? 0;

    $soma = $n1 + $n2;

    echo "Resultado: $soma ";
?>




</body>
</html>