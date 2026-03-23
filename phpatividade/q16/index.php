<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">
    Nome do Aluno: <input type="text" name="nome" required><br>
    Nota 1: <input type="number" step="0.1" name="n1" required><br>
    Nota 2: <input type="number" step="0.1" name="n2" required><br>
    Nota 3: <input type="number" step="0.1" name="n3" required><br>
    <button type="submit">Calcular Média</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Aluno: $nome <br>";
    echo "Média: " . number_format($media, 2) . "<br>";

    if ($media >= 7) {
        echo "Situação: <strong>Aprovado</strong>";
    } elseif ($media <= 5) {
        echo "Situação: <strong>Reprovado</strong>";
    } else {
        echo "Situação: <strong>Recuperação</strong>";
    }
}
?> 
</body>
</html>