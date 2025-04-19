<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Verificar Maioridade</title>
</head>
<body>
    <h2>Verifique se você já atingiu a maioridade</h2>

    <form method="post">
        Informe sua idade: 
        <input type="number" name="idade" min="0" value="<?= isset($_POST['idade']) ? $_POST['idade'] : '' ?>"><br><br>

        Resultado:
        <input type="text" readonly value="<?php
            if (isset($_POST['idade'])) {
                $idade = (int) $_POST['idade'];
                if ($idade >= 18) {
                    echo "Já é maior de idade";
                } else {
                    $faltam = 18 - $idade;
                    echo "Faltam $faltam anos";
                }
            }
        ?>"><br><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>
