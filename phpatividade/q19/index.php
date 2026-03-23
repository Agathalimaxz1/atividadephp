<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Nome: <input type="text" name="nome" required><br>
    Sexo (M/F): <input type="text" name="sexo" maxlength="1" required><br>
    <button type="submit">Verificar</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $sexo = strtoupper($_POST['sexo']);

    if ($sexo == "M") {
        echo "O funcionário $nome é do sexo Masculino.";
    } elseif ($sexo == "F") {
        echo "A funcionária $nome é do sexo Feminino.";
    } else {
        echo "Sexo inválido! Digite M ou F.";
    }
}
?>
</body>
</html>