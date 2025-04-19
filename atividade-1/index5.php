<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Verificar Velocidade</title>
</head>
<body>
    <h2>Verificar se a velocidade está dentro do limite (110 km/h)</h2>

    <form method="post">
        Velocidade do veículo (km/h): 
        <input type="number" name="velocidade" min="0" value="<?= isset($_POST['velocidade']) ? $_POST['velocidade'] : '' ?>"><br><br>

        Resultado:
        <input type="text" readonly value="<?php
            if (isset($_POST['velocidade'])) {
                $vel = (int) $_POST['velocidade'];
                $limite = 110;

                if ($vel > $limite) {
                    $excesso = $vel - $limite;
                    echo "Excedeu em $excesso km/h";
                } else {
                    echo "Dentro do limite";
                }
            }
        ?>"><br><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>
