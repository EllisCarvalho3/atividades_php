<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Números Pares de 1 a 100</title>
</head>
<body>
    <h2>Mostrar números pares de 1 a 100</h2>

    <form method="post">
        <input type="submit" name="mostrar" value="Exibir Pares">
    </form>

    <?php
    if (isset($_POST['mostrar'])) {
        echo "<p>";
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        echo "</p>";
    }
    ?>
</body>
</html>
