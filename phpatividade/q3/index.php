<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="index.php" method="get">
    <label>Distañcia:</label>
    <input type="number" name="num1" required>
    
    <label>Combustível:</label>
    <input type="number" name="num2" required>
    
    <button type="submit">Calcular</button>
    </form>
  <?php
  $dist = $_GET['dist'];
  $combus = $_GET['combus'];
  $media = $dist/$combus;
  echo "consumo media: " . $media . "km/l";
  ?>
</body>
</html>
