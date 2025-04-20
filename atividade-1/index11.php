<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Ler 5 Números com Vetor</title>
</head>
<body>
    <h2>Digite 5 números inteiros</h2>

    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            Número <?= $i ?>: 
            <input type="number" name="numeros[]" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['numeros'])) {
        $numeros = $_POST['numeros'];

        echo "<h3>Números digitados:</h3><ul>";
        foreach ($numeros as $n) {
            echo "<li>$n</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
