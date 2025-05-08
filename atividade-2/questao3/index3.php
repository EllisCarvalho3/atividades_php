<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>

    <?php 
        require './Carro.php';
       
        $carro = new Carro();
       
        $msg = $carro->exibir("Chevrolet", "Camaro");
        echo "<p>$msg</p>";

        // acelerando e mostrando o retorno
        $msg = $carro->acelerar(90);
        echo "<p>$msg</p>";

        // freando e mostrando o retorno
        $msg = $carro->frear(50);
        echo "<p>$msg</p>";
    ?>

</body>
</html>
