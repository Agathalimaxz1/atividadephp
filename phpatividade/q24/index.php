<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Digite um número: <input type="number" step="any" name="valor" required>
    <button type="submit">Classificar</button>
</form>

<?php
if ($_POST) {
    $valor = $_POST['valor'];
    if ($valor > 0) {
        echo "O número $valor é POSITIVO.";
    } elseif ($valor < 0) {
        echo "O número $valor é NEGATIVO.";
    } else {
        echo "O número digitado é ZERO.";
    }
}
?>
</body>
</html>