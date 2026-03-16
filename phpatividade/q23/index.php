<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Digite um número: <input type="number" name="numero" required>
    <button type="submit">Verificar Condições</button>
</form>

<?php
if ($_POST) {
     $n = $_POST['numero'];
     if ($n > 80 || $n < 25 || $n == 40) {
        echo "O número $n atende aos critérios!";
    } else {
        echo "O número $n NÃO atende aos critérios.";
    }
}
?>
</body>
</html>