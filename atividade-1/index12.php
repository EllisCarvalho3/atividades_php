<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Ler 5 Nomes com Vetor</title>
</head>
<body>
    <h2>Digite 5 nomes</h2>

    <form method="post">
        <?php for ($i = 1; $i <= 5; $i++): ?>
            Nome <?= $i ?>: 
            <input type="text" name="nomes[]" required><br><br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['nomes'])) {
        $nomes = $_POST['nomes'];

        echo "<h3>Nomes digitados:</h3><ul>";
        foreach ($nomes as $nome) {
            echo "<li>" . htmlspecialchars($nome) . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
