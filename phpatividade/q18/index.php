<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Digite as idades separadas por vírgula:<br>
    <textarea name="idades" rows="5" cols="30" required></textarea><br>
    <button type="submit">Verificar Idades</button>
</form>

<?php
if ($_POST) {
    $idades = explode(",", $_POST['idades']);

    foreach ($idades as $i) {
        $i = trim($i);
        if ($i >= 18) {
            echo "Idade $i: Maior de idade<br>";
        } else {
            echo "Idade $i: Menor de idade<br>";
        }
    }
}
?>
</body>
</html>