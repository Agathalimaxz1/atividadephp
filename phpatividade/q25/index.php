<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Número 1: <input type="number" name="n1"><br>
    Número 2: <input type="number" name="n2"><br>
    <button type="submit">Comparar</button>
</form>

<?php
if ($_POST) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];

    if ($a == $b) {
        echo "Os números são iguais.";
    } else {
        echo "Os números são diferentes. ";
        if ($a > $b) {
            echo "O maior é $a.";
        } else {
            echo "O maior é $b.";
        }
    }
}
?>
</body>
</html>