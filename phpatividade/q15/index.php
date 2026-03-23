<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Digite um número: <input type="number" name="num" required><br>
    <button type="submit">Verificar Intervalo</button>
</form>

<?php
if ($_POST) {
    $num = $_POST['num'];
    if ($num >= 100 && $num <= 200) {
        echo "O número $num está no intervalo entre 100 e 200.";
    } else {
        echo "O número $num está fora do intervalo.";
    }
}
?>
</body>
</html>