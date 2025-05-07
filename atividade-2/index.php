<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>

    <?php
    require './Pessoa.php';
    $nome = new Pessoa();
    $msg = $nome->apresentar("Webber", 30);
    echo "<h1>$msg</h1>";

?>
    
</body>
</html>