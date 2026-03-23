<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">
    Valor do Depósito (R$): <input type="number" step="0.01" name="valor_deposito" required><br>
    <button type="submit">Calcular Rendimento</button>
</form>

<?php
if ($_POST) {
    $valorDeposito = $_POST['valor_deposito'];

    $valorComRendimento = $valorDeposito * 1.007;

    echo "Após um mês, seu valor com rendimento será: R$ " . number_format($valorComRendimento, 2, ',', '.');
}
?> 
</body>
</html>
