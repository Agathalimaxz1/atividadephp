<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Digite um número (1 a 5): <input type="number" name="num" required>
    <button type="submit">Escrever por Extenso</button>
</form>

<?php
if ($_POST) {
    $num = $_POST['num'];
    
    switch ($num) {
        case 1:
            echo "Um";
            break;
        case 2:
            echo "Dois";
            break;
        case 3:
            echo "Três";
            break;
        case 4:
            echo "Quatro";
            break;
        case 5:
            echo "Cinco";
            break;
        default:
            echo "Número inválido";
            break;
    }
}
?>
</body>
</html>