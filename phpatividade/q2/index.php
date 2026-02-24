<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <label>Primeiro Número:</label>
    <input type="number" name="num1" required>
    
    <label>Segundo Número:</label>
    <input type="number" name="num2" required>
    
    <button type="submit">Calcular</button>
</form>
<?php 
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
echo "soma: " . $n1 + $n2;
echo "subtracao : " . $n1 - $n2;
echo "multiplicacao : " . $n1 * $n2;
if ($n2 != 0) {
    echo "divisao: " . $n1/$n2;

} else {
    echo "divisao impossivel";
}


?>
</body>
</html>