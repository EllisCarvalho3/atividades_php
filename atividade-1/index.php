<?php
// Caminho: media_formulario.php

// Inicializa a média como vazia
$media = null;

// Processa o formulário se os dados foram enviados
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota1 = (float) $_POST['nota1'];
    $nota2 = (float) $_POST['nota2'];
    $nota3 = (float) $_POST['nota3'];
    $nota4 = (float) $_POST['nota4'];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Questão 1</title>
</head>
<body>
    <h2>Digite as 4 notas do aluno</h2>
    <form method="post" action="">
        <label>Nota 1: <input type="number" step="0.01" name="nota1" required></label><br><br>
        <label>Nota 2: <input type="number" step="0.01" name="nota2" required></label><br><br>
        <label>Nota 3: <input type="number" step="0.01" name="nota3" required></label><br><br>
        <label>Nota 4: <input type="number" step="0.01" name="nota4" required></label><br><br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php if ($media !== null): ?>
        <h3>Média do aluno: <?= number_format($media, 2, ',', '') ?></h3>
    <?php endif; ?>
</body>
</html>
