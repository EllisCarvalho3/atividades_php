<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Função soma()</title>
</head>
<body>
    <h2>Vamos somar dois números!</h2>

    <!-- Formulário com dois números -->
    <form method="post">
        Número 1: <input type="number" name="x" required><br><br>
        Número 2: <input type="number" name="y" required><br><br>
        <input type="submit" value="Somar">
    </form>

    <?php
    // 1. Criamos o robôzinho que soma
    function soma($x, $y) {
        return $x + $y;
    }

    // 2. Quando o formulário for enviado...
    if (isset($_POST['x']) && isset($_POST['y'])) {
        $x = (int) $_POST['x'];
        $y = (int) $_POST['y'];

        // 3. Chamamos a função e mostramos o resultado
        $resultado = soma($x, $y);
        echo "<p><strong>Resultado da soma:</strong> $x + $y = $resultado</p>";
    }
    ?>
</body>
</html>
