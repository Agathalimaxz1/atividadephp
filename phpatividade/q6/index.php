<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    Valor A: <input type="number" name="a" required><br>
    Valor B: <input type="number" name="b" required><br>
    <button type="submit">Trocar</button>
</form>

<?php
if ($_GET) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "Valores trocados: A = $a, B = $b";
}
?>
</body>
</html>