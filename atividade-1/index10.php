<?php
session_start();

if (!isset($_SESSION['menores'])) {
    $_SESSION['menores'] = 0;
    $_SESSION['idosos'] = 0;
}

if (isset($_POST['idade'])) {
    $idade = (int) $_POST['idade'];

    if ($idade < 1) {
        $finalizado = true;
        $menores = $_SESSION['menores'];
        $idosos = $_SESSION['idosos'];
        session_destroy(); // Zera a contagem
    } else {
        if ($idade < 18) {
            $_SESSION['menores']++;
        } elseif ($idade > 65) {
            $_SESSION['idosos']++;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>Contar Faixas Etárias</title>
</head>
<body>
    <h2>Digite a idade das pessoas</h2>

    <?php if (isset($finalizado) && $finalizado): ?>
        <p>Total de pessoas com menos de 18 anos: <strong><?= $menores ?></strong></p>
        <p>Total de pessoas com mais de 65 anos: <strong><?= $idosos ?></strong></p>
        <p><a href="<?= $_SERVER['PHP_SELF'] ?>">Reiniciar</a></p>
    <?php else: ?>
        <form method="post">
            Idade: <input type="number" name="idade" min="0" required>
            <input type="submit" value="Enviar">
        </form>
        <p>Digite <strong>0</strong> ou valor negativo para encerrar.</p>
    <?php endif; ?>
</body>
</html>
