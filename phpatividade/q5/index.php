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
    <input type="number" name="nome" required>
    
    <label>n1:</label>
    <input type="number" name="num1" required>
    <label> n2: </label>
    <input type="number" name = "num2" required>
     <label> n3: </label>
    <input type="number" name = "num3" required>
    
    <button type="submit">Calcular</button>
</form>
<?php
$nome = $_GET['nome'];
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];
$media = ($n1 + $n2 + $n3)/$n3;
echo "aluno: " . $nome . <br>
echo "media : " . $media;

?>
</body>
</html>