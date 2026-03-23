<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Cotação do Dólar: <input type="number" step="0.01" name="cotacao" required><br>
    Quantidade de Dólares (US$): <input type="number" step="0.01" name="dolares" required><br>
    <button type="submit">Converter para Real</button>
</form>

<?php
if ($_POST) {
    $cotacao = $_POST['cotacao'];
    $dolares = $_POST['dolares'];

    
    $valorReal = $dolares * $cotacao;

    echo "O valor em Real é: R$ " . $valorReal;
}
?>
</body>
</html>
