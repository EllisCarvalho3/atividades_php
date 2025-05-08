<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <?php 
    require './Triangulo.php';
    $lado1 = new Triangulo();
    $msg = $lado1->conferir(10, 15, 20, 20, 20);
    echo "<p>$msg</p>"
?>

    
</body>
</html>