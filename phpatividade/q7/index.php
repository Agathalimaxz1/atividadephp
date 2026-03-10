<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    Graus Celsius: <input type="number" step="0.01" name="celsius" required>
    <button type="submit">Converter</button>
</form>

<?php
if ($_GET) {
    $c = $_GET['celsius'];
    $f = ($c * 1.8) + 32;
    echo "$c °C equivalem a $f °F";
}
?>
</body>
</html>