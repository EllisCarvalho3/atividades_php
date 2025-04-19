<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Par ou Ímpar</title>
</head>
<body>
    <h2>Verificar se o número é Par ou Ímpar</h2>

    <form method="post">
        Digite um número: 
        <input type="number" name="numero" value="<?= isset($_POST['numero']) ? $_POST['numero'] : '' ?>"><br><br>

        Resultado:
        <input type="text" readonly value="<?php
            if (isset($_POST['numero'])) {
                $n = (int) $_POST['numero'];
                echo ($n % 2 == 0) ? "Par" : "Ímpar";
            }
        ?>"><br><br>

        <input type="submit" value="Verificar">
    </form>
</body>
</html>
