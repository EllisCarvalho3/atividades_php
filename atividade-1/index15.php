<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Área de um Retângulo</title>
</head>
<body>
    <h2>Calcular a Área de um Retângulo</h2>

    <!-- Formulário com largura e altura -->
    <form method="post">
        Largura (cm): <input type="number" step="0.1" name="largura" required><br><br>
        Altura (cm): <input type="number" step="0.1" name="altura" required><br><br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    // 1. Criamos o robôzinho que calcula a área
    function calculaAreaRetangulo($largura, $altura) {
        return $largura * $altura;
    }

    // 2. Se o formulário foi enviado...
    if (isset($_POST['largura']) && isset($_POST['altura'])) {
        $largura = (float) $_POST['largura'];
        $altura = (float) $_POST['altura'];

        // 3. Chamamos a função e pegamos o resultado
        $area = calculaAreaRetangulo($largura, $altura);

        // 4. Mostramos o resultado
        echo "<p><strong>A área do retângulo é:</strong> " . number_format($area, 2, ',', '') . " cm²</p>";
    }
    ?>
</body>
</html>
