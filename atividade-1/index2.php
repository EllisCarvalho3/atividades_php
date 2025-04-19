<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h2>Converter Celsius para Fahrenheit</h2>

    <form method="post">
        Temperatura em Celsius: 
        <input type="text" name="celsius" value="<?= isset($_POST['celsius']) ? $_POST['celsius'] : '' ?>"><br><br>

        Temperatura em Fahrenheit:
        <input type="text" name="fahrenheit" readonly 
               value="<?php
                   if (isset($_POST['celsius'])) {
                       $c = $_POST['celsius'];
                       $f = $c * 1.8 + 32;
                       echo $f;
                   }
               ?>"><br><br>

        <input type="submit" value="Converter">
    </form>
</body>
</html>
