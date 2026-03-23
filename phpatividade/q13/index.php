<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Digite um número: <input type="number" name="numero" required><br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_POST) {
    $numero = $_POST['numero'];
    if ($numero > 10) {
        echo "O número $numero é maior que 10!";
    } else {
        echo "O número $numero NÃO é maior que 10.";
    }
}
?>
</body>
</html>