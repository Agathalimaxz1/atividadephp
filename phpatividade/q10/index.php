<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form method="get">
         <label for="valor_compra">Valor Total da Compra (R$):</label>
        <input type="number" step="0.01" name="valor_compra" id="valor_compra" placeholder="Ex: 500.00" required>
        
        <button type="submit" name="calcular">Calcular Prestações</button>
    </form>

    <?php
    if (isset($_GET['calcular'])) {
        $valorTotal = $_GET['valor_compra'];
        $quantidadeParcelas = 5;
        $valorPrestacao = $valorTotal / $quantidadeParcelas;
    echo "valor prestação: " . $valorPrestacao
    }
    ?>
</div>

</body>
</html>