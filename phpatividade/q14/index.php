<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Valor 1: <input type="number" name="n1" required><br>
    Valor 2: <input type="number" name="n2" required><br>
    <button type="submit">Comparar</button>
</form>

<?php
if ($_POST) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ($n1 > $n2) {
        echo "O maior número é: $n1";
    } else {
        echo "O maior número é: $n2";
    }
}
?>
</body>
</html>