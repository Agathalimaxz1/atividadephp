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
    Idade: <input type="number" name="idade" required><br>
    Saúde (B para Boa / R para Ruim): <input type="text" name="saude" maxlength="1" required><br>
    <button type="submit">Verificar Aptidão</button>
</form>

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $sexo = strtoupper($_POST['sexo']);
    $idade = $_POST['idade'];
    $saude = strtoupper($_POST['saude']);
    if ($sexo == "M" && $idade >= 18 && $saude == "B") {
        echo "Candidato: $nome <br>";
        echo "Resultado: <strong>APTO</strong> para o serviço militar.";
    } else {
        echo "Candidato: $nome <br>";
        echo "Resultado: <strong>NÃO APTO</strong>.";
        echo "<br>Motivo: Não preenche todos os requisitos (Sexo M, Idade 18+ e Saúde Boa).";
    }
}
?>
</body>
</html>